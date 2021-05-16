<?php

namespace App\Listeners\NotifyStock;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendSMS
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

        $curl = curl_init();
        curl_setopt_array($curl,
            array(
                CURLOPT_URL => "https://api.ghasedak.io/v2/sms/send/simple ",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
//                CURLOPT_https_VERSION => CURL_https_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "message=". 'هم اکنون '. $event->product->title .' در فروشگاه سامان لعیا موجود شد.' ."&sender=3000683838&Receptor=".$event->user->mobile,
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
