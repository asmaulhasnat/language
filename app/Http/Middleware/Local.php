<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Cookie;
use App;

class local
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(isset($_COOKIE['language'])){
		    $raw_locale=$_COOKIE['language'];
		}
		else{
		    $raw_locale=Config::get('app.locale');
		}
		if(in_array($raw_locale,config::get('app.locales'))){
		    $local=$raw_locale;
		}
		else{
		    $local=Config::get('app.locale');
		}
		App::setLocale($local);

		return $next($request);
		    }
}

