<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\SalePageUrl;
use Illuminate\Http\Request;

class CheckSalepageUrl
{
    public function handle(Request $request, Closure $next)
    {
        $salepageurl = SalePageUrl::where('url',$request->url)->first();

        // dd(str_contains($request->url, '?redirect='));

        if (empty($salepageurl) && str_contains($request->url, '?redirect=') == false){
            return abort(404);
        }
        return $next($request);
    }
}
