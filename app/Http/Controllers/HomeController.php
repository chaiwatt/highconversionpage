<?php

namespace App\Http\Controllers;

use App\Models\SalePageUrl;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\SalepageSection;
use App\Models\MediaTransaction;
use App\Notifications\OrderPlacedNofication;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        // $transaction = Transaction::where('source_id','src_test_5u7d1yb9claoeypo8vt')->first();
        // // $mediatransaction = MediaTransaction::where('source_id',trim($request->source))->first();
        // dd($transaction);
        $package = [
            'title' => 'ทดสอบการส่งเมล',
            'slug' => 'post-slug'
        ];
        Notification::route('mail', [
            'joerocknpc@gmail.com' => 'chaiwat',
        ])->notify(new OrderPlacedNofication($package));
        dd('its ok');
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


}
