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
Route::get('/', 'Controller@index')->name('index');
Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin');

// GET /photos index   photos.index
// GET /photos/create  create  photos.create
// POST    /photos store   photos.store
// GET /photos/{photo} show    photos.show
// GET /photos/{photo}/edit    edit    photos.edit
// PUT/PATCH   /photos/{photo} update  photos.update
// DELETE  /photos/{photo} destroy photos.destroy
Route::resources([
    'admin/contents' => 'Admin\ContentController',
]);

Route::get('/admin/content-get-slug', 'Admin\ContentController@getSlug')->name('adminContentGetSlug');
Route::get('/{slug}/', 'Controller@content')->where('slug', '[-a-z]*$')->name('content');
