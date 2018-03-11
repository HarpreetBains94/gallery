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


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/staff', 'StaffController@index');
Route::post('/staff/submit', 'StaffController@log_in');

Route::get('/showroom',  'ArtController@index');
Route::get('/showroom/page={page_no}',  'ArtController@page_show');

Route::get('/art_view/id={art_id}',  'ArtController@art_show');

Route::get('/artist/id={artist_id}',  'ArtistController@index');
Route::get('/artist/id={artist_id}/page={page_no}',  'ArtistController@page_show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/cms', 'CmsController@index');


Route::get('/ims', 'ImsController@index');
Route::get('/ims/art', 'ImsController@art_options');
Route::get('/ims/art/add', 'ImsController@add_art');
Route::get('/ims/art/edit', 'ImsController@edit_art');
Route::get('/ims/art/remove', 'ImsController@remove_art');
Route::post('/ims/art/store','ImsController@art_post');