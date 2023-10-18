<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\CreateUser;
use App\Models\Departamento;
use App\Models\EntidadUser;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\UserTrait;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    use UserTrait;

    public function index()
    {

        $idUser = Auth::id();
        $suscripcion = User::getSuscripcion($idUser);
        $entidad = User::getEntidadUser($idUser);

        if(!$entidad)
        {

        }

        $departamentos = Departamento::whereEntidadId($entidad->id)->orderBy('nombre','asc')->get();

        $idEntidad = $entidad->id;
        $users = User::getUsersByEntidad($idEntidad);
        //dd($users);
        return view('frontend.admin.users.list', compact('users', 'departamentos'));
    }


    public function store(Request $request)
    {
        $request->validate([
            //'tipo' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'num_doc' => 'required|unique:users',
            'tipo_doc' => 'required',
            'celular' => 'required|numeric|min:100000',
        ]);

        $res = $this->createUsuario($request);

        $data = [
            'nombre' => $request->name,
            'email' => $request->email,
        ];

        Mail::to($request->email)->send(new CreateUser($data));

        return response()->json($res, Response::HTTP_OK);


        // if($request->tipo == 'update')
        // {
        //     $request->validate([
        //         'idUser' => 'required',
        //         'tipo' => 'required',
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|string|email|max:255',
        //         'num_doc' => 'required',
        //         'tipo_doc' => 'required',
        //         'celular' => 'required|numeric|min:100000',
        //     ]);

        //     $res = $this->update($request);

        //     return response()->json($res, Response::HTTP_CREATED);
        // }else{
        //     $request->validate([
        //         'tipo' => 'required',
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|string|email|max:255|unique:users',
        //         'num_doc' => 'required|unique:users',
        //         'tipo_doc' => 'required',
        //         'celular' => 'required|numeric|min:100000',
        //     ]);

        //     $res = $this->createUsuario($request);

        //     return response()->json($res, Response::HTTP_OK);
        // }


    }


    public function createUsuario($request)
    {


        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->num_doc = $request->num_doc;
            $user->tipo_doc = $request->tipo_doc;
            $user->celular = $request->celular;
            $user->password = bcrypt($request->num_doc);
            $user->role = 'user';
            if(!$user->save())
            {

            }
            $userLogueado = Auth::id();
            /** encontramos la entidad del usuario */
            $entidad = User::getEntidadUser($userLogueado);

            if(!$entidad)
            {

            }
            /**
             * asignamos la entidad al usuario nuevo
             */
            $entidadUser = new EntidadUser();
            $entidadUser->user_id = $user->id;
            $entidadUser->entidad_id = $entidad->id;
            $entidadUser->departamento_id = $request->departamento;
            $entidadUser->save();

            /**
             * creamos y asignamos la billetera
             */
            $wallet = $this->createWallet($user);
            DB::commit();
            return $user;
        } catch (\Throwable $th) {

            DB::rollback();
            //throw $th;
        }
    }


    public function create()
    {
        $entidad = 1;
        $departamentos = Departamento::whereEntidadId($entidad)->orderBy('nombre','asc')->get();
        return view('frontend.admin.users.create', compact('departamentos'));
    }

    public function update($request)
    {
        $user = User::find($request->idUser);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->num_doc = $request->num_doc;
        $user->tipo_doc = $request->tipo_doc;
        $user->celular = $request->celular;
        $user->password = bcrypt($request->num_doc);
        if(!$user->save())
        {

        }

        return $user;
    }
}
