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

Route::get('/', function() {
    $projects = json_decode(file_get_contents(storage_path('json/projects.json')));
    $skills = json_decode(file_get_contents(storage_path('json/skills.json')));

    return view('index', [
        'timeExperience' => (date('Y', time()) - date('Y', 1265014800)) + 1,
        'googleAnalyticsTrackingId' => 1,
        'projects' => $projects,
        'skills' => $skills,
        'siteTitle' => 'Martin Wyatt',
        'metaTitle' => 'Martin Wyatt - Web Developer Lancashire',
        'metaDescription' => 'I work at AV Distribution as a Web Developer. I spend my days designing and implementing web interfaces. I am very dedicated to my craft with 7 years experience.',
    ]);
})->name('home')->middleware('common');
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::post('/users', 'UsersController@store');

Auth::routes();

Route::get('/admin', 'Admin@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/admin', 'Admin@index');
