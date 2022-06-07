<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      /*   App::setLocale($request->segment(1));
        session()->put('locale', $request->segment(1));
        return $next($request); */

       /*  if(empty(Session::get('locale'))){
            $locale = Session::get('locale','az');
        }
        else{
            $locale = Session::get('locale');
        }
        App::setLocale($locale); */
        {
            if(Session::has('locale')){
    
                App::setLocale(Session::get('locale'));
        
                }
            return $next($request);
        }

        return $next($request);
    }
}