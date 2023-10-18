<?php

namespace App\Traits;

use App\Models\EntidadUser;
use App\Models\UserWallet;
use App\Models\Wallet;
use Carbon\Carbon;

trait UserTrait {

    public function createWallet($user)
    {
        try {
            $apiKey = setting()->api_key_dev;
            $endPoint = setting()->endpoint_dev;

            /**
             * generamos la billetera con el api de tatum
             */

            $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_HTTPHEADER => [
                "x-api-key: $apiKey"
            ],
            CURLOPT_URL => $endPoint."wallet",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            ]);

            $response = curl_exec($curl);
            $error = curl_error($curl);

            curl_close($curl);
            $res = json_decode($response, true);
            //dd($res);

            if ($error) {
            echo "cURL Error #:" . $error;
            } else {

                $wa = new Wallet();
                $wa->titulo = 'wallet '.$user->id;
                $wa->address = $res['address'];
                $wa->secret = $res['secret'];
                $wa->mnemonic = $res['mnemonic'];
                $wa->admin_id = auth()->id();
                $wa->fecha = Carbon::now();
                $wa->save();

                /**
                 * asignamos al usuario q acaban de crear
                 *
                 */

                $userWallet = new UserWallet();
                $userWallet->user_id = $user->id;
                $userWallet->wallet_id = $wa->id;
                $userWallet->save();

                return $wa;


            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

