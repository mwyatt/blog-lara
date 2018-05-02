<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/articles/', 'Controller@example');

Route::get('/', function () {
    $articles = [
        (object) [
            'title' => 'Tokyo',
            'description' => 'Our trip to Tokyo was fabulous, take a look to see where we went and what we did.',
            'timePublished' => time(),
        ],
        (object) [
            'title' => 'Table Tennis',
            'description' => 'Table tennis is going really well I am focusing on training more and more its going good.',
            'timePublished' => time(),
        ],
        (object) [
            'title' => 'Painting',
            'description' => 'Have really got the bug for painting of late, hope Claire is not mad!',
            'timePublished' => time(),
        ],
    ];

    $projects = [
        (object) [
            "name" => "Business Management System",
            "shortDesc" => "Complete solution for Acme.",
            "pathLogo" => "logo-acme.svg",
            "type" => "notsure",
            "url" => "https://bms.acmefg.com/",
            "classes" => 'project-acme',
        ],
        (object) [
            "name" => "East Lancashire Table Tennis League",
            "shortDesc" => "Fixture, team and player management.",
            "pathLogo" => "logo-elttl.svg",
            "type" => "sport",
            "url" => "http://eastlancstt.org.uk/",
            "classes" => 'project-elttl',
        ],
        (object) [
            "name" => "AudioVisual Online",
            "shortDesc" => "Bespoke audio visual e-commerce platform.",
            "pathLogo" => "logo-avo.svg",
            "type" => "ecommerce",
            "url" => "https://audiovisualonline.co.uk/",
            "classes" => 'project-avo',
        ],
        (object) [
            "name" => "Github",
            "shortDesc" => "Various projects.",
            "pathLogo" => "logo-elttl.svg",
            "type" => "plugin",
            "url" => "http://github.com/",
            "classes" => 'project-github',
        ],
    ];
    return view('welcome', [
        'projects' => $projects,
        'articles' => $articles,
    ]);
})->name('index');

Auth::routes();

Route::get('admin', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{slug}/', function ($slug) {
    echo '<pre>';
    print_r("Slug: $slug");
    echo '</pre>';
    exit;
    
})->where('slug', '[a-z]+');
