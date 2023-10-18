<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\EntidadUser;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function role()
    {
        $user = Auth::user();
        if($user->role == 'admin'){
            return 'admin';
        }elseif($user->role == 'superadmin'){
            return 'superadmin';
        }else{
            return 'user';
        }
    }

    public static function getUsersByEntidad($idEntidad)
    {
        $users = User::select('users.name', 'users.email', 'users.celular', 'users.num_doc','departamento.nombre as departamento', 'users.id', 'users.created_at')
                ->join('entidad_users as eu', 'eu.user_id', '=', 'users.id')
                ->join('departamentos as departamento', 'departamento.id', '=', 'eu.departamento_id')
                ->where('users.role', 'user')
                ->where('eu.entidad_id', $idEntidad)
                ->get();

        return $users;
    }


    public static function getEntidadUser($idUser)
    {
        $entidad = EntidadUser::where('user_id', $idUser)->first();
        $data = [];
        if($entidad)
        {
            $data = Entidad::find($entidad->entidad_id);
        }

        return $data;
    }


    public static function getSuscripcion($idUser)
    {
        $entidad = EntidadUser::where('user_id', $idUser)->first();

        if(!$entidad){

        }

        $suscripcion = EntidadSuscripcion::where('entidad_id', $entidad->entidad_id)->first();

        if(!$suscripcion)
        {

        }

        $plan = Suscripcion::find($suscripcion->suscripcion_id);

        if(!$plan)
        {

        }

        $plan['departamento_id'] = $entidad->departamento_id;
        $plan['entidad_id'] = $entidad->entidad_id;

        return $plan;

    }


    public static function isAdmin()
    {
        if(Auth::user()->role == 'admin'){
            return true;
        }

        return false;
    }
}
