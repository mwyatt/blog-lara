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
        $urlHome = route('home');
        $menuPrimary = [
            (object) [
                'name' => 'Home',
                'classes' => ['js-smooth-scroll'],
                'url' => $urlHome . '#top'
            ],
            (object) [
                'name' => 'About',
                'classes' => ['js-smooth-scroll'],
                'url' => $urlHome . '#about-me'
            ],
            (object) [
                'name' => 'Work',
                'classes' => ['js-smooth-scroll'],
                'url' => $urlHome . '#projects'
            ],
            (object) [
                'name' => 'Skills',
                'classes' => ['js-smooth-scroll'],
                'url' => $urlHome . '#skills'
            ]
        ];

        \Illuminate\Support\Facades\View::share('menuPrimary', $menuPrimary);
        \Illuminate\Support\Facades\View::share('metaTitle', 'Martin Wyatt');
        \Illuminate\Support\Facades\View::share('metaKeywords', '');
        \Illuminate\Support\Facades\View::share('metaDescription', '');
        \Illuminate\Support\Facades\View::share('googleAnalyticsTrackingId', '');

        return $next($request);
    }
}
