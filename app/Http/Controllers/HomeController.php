<?php

namespace App\Http\Controllers;

use App\Models\SalePageUrl;
use Illuminate\Http\Request;
use App\Models\SalepageSection;
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
        $post = [
            'title' => 'ทดสอบการส่งเมล',
            'slug' => 'post-slug'
        ];
        Notification::route('mail', [
            'joerocknpc@gmail.com' => 'chaiwat',
        ])->notify(new OrderPlacedNofication($post));
        dd('its done');
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
