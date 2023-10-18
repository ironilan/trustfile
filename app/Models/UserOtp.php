<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;

class UserOtp extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'otp', 'expire_at'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendSMS($receiverNumber)
    {
        $message = "Tu codigo de logueo es: ".$this->otp;

        $sid    = config('twilio.sid');
        $token  = config('twilio.token');
        $client = new Client( $sid, $token );

        try {
            $number = '+'.$receiverNumber;


            $client->messages->create(
                $number,
                [
                    'from' => config('twilio.from'),
                    'body' => $message,
                ]
            );


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
