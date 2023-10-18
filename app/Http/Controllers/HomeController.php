<?php

namespace App\Http\Controllers;

use App\Models\Diapositiva;
use App\Models\Documento;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->apiKey = app()->environment('production') ? setting()->api_key_prod : setting()->api_key_dev;
        $this->endpoint = app()->environment('production') ? setting()->endpoint_prod : setting()->endpoint_dev;
    }


    public function dashboard()
    {
        //dd('ssss');
        $user = User::role();

        if($user == 'admin')
        {
            return redirect()->route('documentos.admin.index');
        }else{
            return redirect()->route('descargas.index');
        }
    }

    public function index()
    {
        /**
         * verificamos que el codigo opt esta creado o ha expirado
         */
        $user = Auth::user();
        $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();

        $now = now();

        if($userOtp && $now->isBefore($userOtp->expire_at)){
            //return $userOtp;
            if($user == 'admin')
            {
                return redirect()->route('documentos.admin.index');
            }else{
                return redirect()->route('descargas.index');
            }
        }

        return view('auth.opt');

    }



    public function listarDocumentos()
    {
        $userId = Auth::id();
        $documentos = Documento::whereUserId($userId)->orderBy('id', 'desc')->get();
        return view('frontend.documentos.list', compact('documentos'));
    }

    public function create(Request $request)
    {
        $userId = Auth::id();
        $idDocumento = $request->id;

        if(!isset($request->id) || $request->id == '' || $request->id == 'undefined')
        {
            abort(404);
        }

        $documento = Documento::whereId($idDocumento)->where('user_id', $userId)->first();
        if (!$documento) {
            abort(404);
        }



        return view('frontend.documentos.create', compact('idDocumento', 'documento'));
    }


    public function crearDocumento()
    {

        $userId = Auth::id();

        $entidad = User::getEntidadUser($userId);
        $entidadId = 0;
        if($entidad)
        {
            $entidadId = $entidad->id;
        }

        $documento = new Documento();
        $documento->nombre_doc = 'Documento creado sin procesar';
        $documento->user_id = $userId;
        $documento->entidad_id = $entidadId;
        $documento->save();

        return response()->json($documento, Response::HTTP_CREATED);


    }


    public function crearDocumentoFotos(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        $userId = Auth::id();



        $documento = Documento::whereId($request->id)->where('user_id', $userId)->first();
        if ($documento) {

            /**
             * guardamos el archivo en el servidor
             */

            $file = $request->file('file');
            $nombre = rand(100, 999).time().'.'.$file->extension();
            if($file->storeAs('', $nombre, 'diapositivas')){
                /**
                 * guardamos el archivo en base de datos
                */

                $diapo = new Diapositiva();
                $diapo->archivo = $nombre;
                $diapo->user_id = $userId;
                $diapo->documento_id = $documento->id;
                $diapo->save();
            }

        }
        return $request->all();
    }


    public function listDocumentoFotos(Request $request)
    {

    }

    public function generarPdf(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $userId = Auth::id();

        $diapos = Diapositiva::whereUserId($userId)->whereDocumentoId($request->id)->get();

        $pdf = [
            'diapos' => $diapos
        ];

        //dd($pdf);

        $nombreArchivo = time() . '.pdf';



        $dataFinal = PDF::loadView('pdf.documento', $pdf)
                    ->save(storage_path('app/public/documentos/') . $nombreArchivo);

        $documento = Documento::find($request->id);
        $documento->nombre_doc = $nombreArchivo;
        $documento->nombre_original = $nombreArchivo;
        $documento->tipo = 'application/pdf';
        $documento->nivel = 2;
        $documento->save();

        $url = Storage::url('documentos').'/'.$nombreArchivo;
        return response()->json(['url' => $url], Response::HTTP_OK);
    }

    public function enviarBlockchain(Request $request)
    {
        //return $request->all();
        DB::beginTransaction();
        try {

            $user = Auth::id();

            $documento = Documento::whereUserId($user)->whereId($request->id)->first();

            if(!$documento)
            {
                return response()->json([
                    'msj' => 'No existe el documento'
                ], Response::HTTP_CONFLICT);
            }



            /**
             * obtenemos la billetera
             */
            $wallet = DB::table('wallets')
            ->join('user_wallets', 'wallets.id', '=', 'user_wallets.wallet_id')
            ->select('wallets.*')
            ->where('user_wallets.user_id', $user)
            ->first();

            if ($wallet) {
                $data['address_from'] = $wallet->address;
                $data['address_to'] = getPrincipal()->address;
                $data['privateKey'] = $wallet->secret;
                $data['hash'] = $request->hash;
            }


            /**
             * evaluamos que tengan saldo als billetereas
             */
            $saldo = $this->getBalance($data);
            $saldo = json_decode($saldo);



            if (!isset($saldo->balance) || $saldo->balance < 1) {
                return response()->json([
                    'msj' => 'No tienes saldo suficiente en tu billetera'
                ], Response::HTTP_CONFLICT);
            }

            /**
             * enviamos a blockchain
            */


            $res = $this->sendBlockchain($data);
            $res = json_decode($res);

            if (!isset($res->confirmed) || $res->confirmed != true) {
                return response()->json([
                    'msj' => 'Sucedió algo al enviar a blockchain'
                ], Response::HTTP_CONFLICT);
            }

            //dd($res);

            /**
             * actualizamos el registro
             */
            $documento->encriptado = 1;
            $documento->nivel = 3;
            $documento->hash_archivo = $request->hash;
            $documento->transaccion = $res->txId;
            $documento->estado = 'completo';

            if(!$documento->save())
            {
                return response()->json([
                    'msj' => 'No se pudo guardar'
                ], Response::HTTP_CONFLICT);
            }


            DB::commit();
            return response()->json(['msj' => 'Se ha enviado correctamente'], Response::HTTP_OK);



        } catch (\Throwable $th) {
            DB::rollback();
            //throw $th;
        }


    }


    public function sendBlockchain($data)
    {
        //dd($data['address_from']);
        $curl = curl_init();

        $payload = array(
            "from" => $data['address_from'],
            "to" => $data['address_to'],
            "amount" => "0.0001",
            "fee" => "0.001",
            "note" => $data['hash'],
            "fromPrivateKey" => $data['privateKey']
        );

        curl_setopt_array($curl, [
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "x-api-key: $this->apiKey"
            ],
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_URL => $this->endpoint.'transaction',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $res = $response;

        return $res;


    }

    public function getBalance($data)
    {
        $address = $data['address_from'];
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_HTTPHEADER => [
            "x-api-key: $this->apiKey"
        ],
        CURLOPT_URL => "https://api.tatum.io/v3/algorand/account/balance/" . $address,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
        return $error;
        } else {
        return $response;
        }
    }


    public function edit($id)
    {
        $userId = Auth::id();

        if(!isset($id) || $id == '' || $id == 'undefined')
        {
            abort(404);
        }

        $documento = Documento::whereId($id)->where('user_id', $userId)->first();
        if (!$documento) {
            abort(404);
        }



        return view('frontend.documentos.edit', compact('documento'));
    }



}
