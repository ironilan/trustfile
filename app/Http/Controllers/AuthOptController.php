<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

//use Validator;

class AuthOptController extends Controller
{
    public function generarOtp(Request $request)
    {
        //return $request->all();
        $request->validate([
            'celular' => 'required'
        ]);

        /**
         * validamos que exista el usuario con ese celular
         */

         $userId = Auth::id();

         //dd($userId);

        $user = User::where('celular', $request->celular)->where('id', $userId)->first();

        if (!$user) {
            return response()->json(['msj' => 'El numero que registraron no es el mismo que ingresaste aquí.'], Response::HTTP_NOT_FOUND);
        }

        $userOtp = $this->generateOtp($user);
        $userOtp->sendSMS($request->celular);

        return response()->json($userOtp, Response::HTTP_OK);
    }



    public function generateOtp($user)
    {

        /* User Does not Have Any Existing OTP */
        $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();

        $now = now();

        if($userOtp && $now->isBefore($userOtp->expire_at)){
            return $userOtp;
        }

        /* Create a New OTP */
        return UserOtp::create([
            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at' => $now->addMinutes(10)
        ]);
    }


    public function validarOtp(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
        ]);

        $user = Auth::user();

        $userOtp = UserOtp::where('user_id', $user->id)->whereOtp($request->codigo)->latest()->first();

        $now = now();

        if($userOtp && $now->isBefore($userOtp->expire_at)){
            return response()->json($userOtp,Response::HTTP_OK);
        }

        return response()->json(['msj' => 'No se pudo verificar, inténtalo de nuevo.'],Response::HTTP_NOT_FOUND);
    }
}
