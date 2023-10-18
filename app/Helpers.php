<?php

use App\Models\Configuracion;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

function setting()
{

	return Configuracion::get()->last();
}


function getPrincipal()
{
    $user = User::where('tipo_entidad', 'owner')->first();
    return DB::table('wallets')
        ->join('user_wallets', 'wallets.id', '=', 'user_wallets.wallet_id')
        ->select('wallets.*')
        ->where('user_wallets.user_id', $user->id)
        ->first();
}



function formatFecha($value){
	return Carbon::parse($value)->format('d-m-Y H:i:s');
}
