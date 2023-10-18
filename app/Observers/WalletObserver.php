<?php

namespace App\Observers;

use App\Models\Wallet;
use Carbon\Carbon;

class WalletObserver
{
    /**
     * Handle the Wallet "created" event.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return void
     */
    public function created(Wallet $wallet)
    {

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

            $wa = Wallet::find($wallet->id);
            //$wa->titulo = 'wallet '.$wallet->id;
            $wa->address = $res['address'];
            $wa->secret = $res['secret'];
            $wa->mnemonic = $res['mnemonic'];
            $wa->admin_id = auth()->id();
            $wa->fecha = Carbon::now();
            $wa->save();
        }



    }

    /**
     * Handle the Wallet "updated" event.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return void
     */
    public function updated(Wallet $wallet)
    {
        //
    }

    /**
     * Handle the Wallet "deleted" event.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return void
     */
    public function deleted(Wallet $wallet)
    {
        //
    }

    /**
     * Handle the Wallet "restored" event.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return void
     */
    public function restored(Wallet $wallet)
    {
        //
    }

    /**
     * Handle the Wallet "force deleted" event.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return void
     */
    public function forceDeleted(Wallet $wallet)
    {
        //
    }
}
