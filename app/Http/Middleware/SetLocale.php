<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = 'en'; // set en as the fallback locale
        // dd(Route::currentRouteName());
        if ($request->route('locale') == 'en') { // if the route starts with /es/* set locale to ES
            $locale = 'en';
        } else if ($request->route('locale') == 'es') { // if the route starts with /fr/* set locale to FR
            $locale = 'es';
        }

        //set the derived locale
        App::setLocale($locale);

        return $next($request);
    }
}
