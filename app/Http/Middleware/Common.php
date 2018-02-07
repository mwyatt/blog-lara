<?php

namespace App\Http\Middleware;

use Closure;

class Common
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
        \Illuminate\Support\Facades\View::share('metaTitle', 'Default Application Title');
        \Illuminate\Support\Facades\View::share('metaKeywords', '');
        \Illuminate\Support\Facades\View::share('metaDescription', '');
        \Illuminate\Support\Facades\View::share('googleAnalyticsTrackingId', '');

        return $next($request);
    }
}
