<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Response;

class languaje
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(FacadesSession::has('locale') AND array_key_exists( session() -> get('locale'), config('languaje')) ) {
            App::setLocale(session()->get('locale'));
        } else {
            App::setLocale(config('fallback_locale'));
            session(['locale' => config('fallback_locale')]);
        }
        return $next($request);
    }
}
