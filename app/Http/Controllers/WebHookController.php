<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderPlacedNotification;

class WebHookController extends Controller
{
    public function webhook(Request $request){ 
        $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT); 
        if(trim($payload['data']['status']) == 'successful'){
            $pacakage = [
              'reciever_email' => $payload['data']['source']['email'],
              'reciever_name' => $payload['data']['source']['name'],
              'title' => 'คำสั่งซื้อสำเร็จ',
              'payload' => $payload
            ];
            $this->sendmail($pacakage);
            $pacakage = [
              'reciever_email' => 'joerocknpc@gmail.com',
              'reciever_name' => 'Admin',
              'title' => 'คำสั่งซื้อสำเร็จ',
              'payload' => $payload
            ];
            $this->sendmail($pacakage);
        } 
    }
    
    public function sendmail($pacakage){
        Notification::route('mail', [
          $pacakage['reciever_email'] => $pacakage['reciever_name'],
      ])->notify(new OrderPlacedNotification($pacakage));
    }


    public function webhook_demo(Request $request){ 
      $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT);    
      if(trim($payload['data']['status']) == 'successful'){
          $pacakage = [
            'reciever_email' => $payload['data']['source']['email'],
            'reciever_name' => $payload['data']['source']['name'],
            'title' => 'คำสั่งซื้อสำเร็จ',
            'payload' => $payload
          ];
          $this->sendmail($pacakage);
          $pacakage = [
            'reciever_email' => 'joerocknpc@gmail.com',
            'reciever_name' => 'Admin',
            'title' => 'คำสั่งซื้อสำเร็จ',
            'payload' => $payload
          ];
          $this->sendmail($pacakage);
      } 
  }
}
