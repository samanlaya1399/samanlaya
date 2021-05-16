<?php

namespace App\Listeners\UserActivation;

use App\Events\UserActivation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSms
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserActivation  $event
     * @return void
     */
    public function handle(UserActivation $event)
    {
//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => "https://api.ghasedak.io/v2/sms/send/simple",
////            CURLOPT_https_VERSION => "CURLOPT_https_VERSION",
//            CURLOPT_CUSTOMREQUEST => "POST",
//            CURLOPT_POSTFIELDS => "message=".$event->activationCode. "&linenumber=3000683838&Receptor=09127591542",
//            CURLOPT_HTTPHEADER => array(
//                "apikey: 19731317f825a96342e1d54950bed079ec7abff0c1de68c71444b25fab00ba65",
//            ),
//        ));
//        $response = curl_exec($curl);
//        $err = curl_error($curl);
//        curl_close($curl);
//
//        if ($err) {
////            echo "cURL Error #:" . $err;
//        } else {
////            echo $response;
//        }

        $curl = curl_init();
        curl_setopt_array($curl,
            array(
                CURLOPT_URL => "https://api.ghasedak.io/v2/verification/send/simple ",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
//                CURLOPT_https_VERSION => CURL_https_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "type=1&param1=".$event->activationCode."&receptor=".$event->user->mobile."&template=register",
                CURLOPT_HTTPHEADER => array(
                    "apikey: 19731317f825a96342e1d54950bed079ec7abff0c1de68c71444b25fab00ba65",
                    "cache-control: no-cache",
                    "content-type: application/x-www-form-urlencoded"
                )));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
//            echo "cURL Error #:" . $err;
        } else {
//            echo $response;
        }
    }
}
