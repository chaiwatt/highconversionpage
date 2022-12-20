<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use ox01code\Omise\process\OmiseCharge;
use ox01code\Omise\process\OmiseSource;

class PaymentController extends Controller
{
    public function getCharge(Request $request)
    {


        $charge = null;
        $discount = 0; 
        $amount = 250;
        $source = OmiseSource::create([
            'amount' => floatval($amount) * (1-$discount) * 100,
            'store_name' => 'ijsoworksheet',
            'name' => 'ijsoworksheet',
            'email' => $request->email,
            // 'phone_number' => $request->phone,
            'currency' => 'THB',
            'type' => 'promptpay',
            // 'type' => 'truemoney',
        ]);

        

        if($source['object'] == 'source'){
            $charge = OmiseCharge::create([
                'amount' => floatval($amount) * (1-$discount) * 100,
                'currency' => 'THB',
                'source' => $source['id'],
                'return_uri' => URL::to('/redirect?source='.$source['id']),
            ]);
            // dd($charge);
            
            $transaction = new Transaction();
            $transaction->storename = $source['store_name'];
            $transaction->name = $request->name;
            $transaction->lastname = $request->lastname;
            $transaction->amount =$amount;
            $transaction->discount = floatval($amount) * $discount;
            // $transaction->address = $request->address;
            $transaction->email = $request->email;
            $transaction->phone = $request->phone;
            $transaction->source_id = $source['id'];
            $transaction->charge_id = $charge['id'];
            $transaction->save();
        }

        $result = collect([
            'image' => $charge['source']['scannable_code']['image']['download_uri'],
            'source_id' => $source['id'],
            'charge_id' => $charge['id'],
            ]);

        return $result; //$charge['source']['scannable_code']['image']['download_uri'];
    }

    public function redirect(Request $request)
    {
        $transaction = Transaction::where('source_id',trim($request->source))->first();
        // dd($transaction)
        return view('thanks',[
            'transaction' => $transaction
        ]);
    }
}
