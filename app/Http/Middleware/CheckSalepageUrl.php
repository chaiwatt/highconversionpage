<?php

namespace App\Http\Middleware;

use App\Models\SalePageUrl;
use Closure;
use Illuminate\Http\Request;

class CheckSalepageUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $salepageurl = SalePageUrl::where('url',$request->url)->first();

        if (empty($salepageurl)){
            return abort(404);
        }
        return $next($request);
    }
}
