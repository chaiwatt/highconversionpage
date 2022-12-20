<?php

namespace App\Http\Controllers;

use App\Models\SalePageUrl;
use Illuminate\Http\Request;
use App\Models\SalepageSection;
use App\Models\MediaTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function salepage()
    {
        $salepageurls = SalePageUrl::pluck('user_id')->toArray();
        $salepagesections = SalepageSection::whereIn('user_id',$salepageurls)
                                        ->where('status',1)
                                        ->orderBy("order", "asc")
                                        ->get();
        return view('salepage.index',[
                    'salepagesections' => $salepagesections,
                    'salepageurl' => SalePageUrl::where('user_id',$salepagesections->first()->id)->first()
                ]
        );
    }

    public function getPrompayPaymentStatus(Request $request){
        $source_id = $request->source;
        $charge_id = $request->charge;
        $result = collect([
            'status' => 0,
            'uri' => URL::to('/redirect?source='.$source_id),
            ]);

        $transaction = MediaTransaction::where('source_id',$source_id)->where('charge_id',$charge_id)->first();
        if (!empty($transaction)){
            $result = collect([
                'status' => 1,
                'uri' => URL::to('/redirect?source='.$source_id),
                ]);
        }

        // $result = collect([
        //     'source_id' => $source_id,
        //     'charge_id' => $charge_id,
        //     ]);

        return $result; //$charge['source']['scannable_code']['image']['download_uri'];
    }

    // public function getmediatb(){
    //     $mediatransactions = MediaTransaction::all();
    //     return $mediatransactions;
    // }
}
