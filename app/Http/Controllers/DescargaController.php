<?php

namespace App\Http\Controllers;

use App\Models\Descarga;
use App\Models\Diapositiva;
use App\Models\Documento;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class DescargaController extends Controller
{
    public function listDescargas()
    {
        $userId = Auth::id();

        $entidad = User::getEntidadUser($userId);
        $documentos_all = Documento::where('entidad_id',$entidad->id)->whereEstado('completo')->orderBy('id', 'desc')->get();
        $documentos = [];
        foreach ($documentos_all as $key => $documento) {

            $diapos = Diapositiva::where('documento_id', $documento->id)->orderBy('id', 'asc')->get();
            $imagen = '';
            if($diapos)
            {
                $imagen = $diapos->first();
                $imagen = $imagen->archivo;
            }

            $usuario = User::find($documento->user_id);
            $documento['usuario'] = $usuario ? $usuario->name : '';
            $documento['descargas_propias'] = Descarga::whereUserId($userId)->get()->count();
            $documento['descargas_totales'] = Descarga::where('entidad_id',$entidad->id)->get()->count();
            $documento['imagen'] = $imagen;
            $documentos[] = $documento;
        }

        //dd($documentos);
        return view('frontend.descargas.list', compact('documentos'));
    }


    public function validarDescargas(Request $request)
    {
        $userId = Auth::id();
        $suscripcion = User::getSuscripcion($userId);
        $entidad = User::getEntidadUser($userId);
        $documento = Documento::select('id', 'nombre_doc', 'nombre_original')->where('entidad_id',$entidad->id)->whereEstado('completo')->whereId($request->id)->first();
        //return response()->json(['msj' => 'No se puede descargar.'], Response::HTTP_CONFLICT);
        if($documento)
        {
            /**
             * cantidad de descargas
             */
            $descargasActuales = Descarga::whereUserId($userId)->get()->count();

            $descargasPermitidas = $suscripcion->cant_descargas;

            if($descargasActuales < $descargasPermitidas)
            {
                $url = '/dashboard/descargas/true?id='.$documento->id;
                return response()->json($url, Response::HTTP_OK);
            }

            return response()->json(['msj' => 'Ya exediste la cantidad maxima de descargas.'], Response::HTTP_CONFLICT);

        }

        return response()->json(['msj' => 'No se puede descargar.'], Response::HTTP_CONFLICT);
    }


    public function descargar(Request $request)
    {
        $userId = Auth::id();
        $suscripcion = User::getSuscripcion($userId);
        $entidad = User::getEntidadUser($userId);
        $documento = Documento::select('id', 'nombre_doc', 'nombre_original')->where('entidad_id',$entidad->id)->whereEstado('completo')->whereId($request->id)->first();


        if($documento)
        {
            /**
             * cantidad de descargas
             */
            $descargasActuales = Descarga::whereUserId($userId)->get()->count();

            $descargasPermitidas = $suscripcion->cant_descargas;

            if($descargasActuales < $descargasPermitidas)
            {
                /**
                 * actualizamos el registro de descargas
                 */

                $descarga = new Descarga();
                $descarga->user_id = $userId;
                $descarga->departamento_id = $suscripcion->departamento_id;
                $descarga->documento_id = $documento->id;
                $descarga->entidad_id = $suscripcion->entidad_id;
                $descarga->fecha = Carbon::now();
                $descarga->save();


                return Storage::disk('documentos')->download($documento->nombre_doc);
            }

            return response()->json(['msj' => 'Ya exediste la cantidad maxima de descargas.'], Response::HTTP_CONFLICT);

        }

        return response()->json(['msj' => 'No se puede descargar.'], Response::HTTP_CONFLICT);


    }


    public function show(Request $request)
    {
        $documento = Documento::where('id',$request->id)->first();
        return view('frontend.descargas.show', compact('documento'));
    }
}
