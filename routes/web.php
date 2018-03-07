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

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/showroom',  'ArtController@index');
Route::get('/showroom/page={page_no}',  'ArtController@page_show');
Route::get('/art_view/id={art_id}',  'ArtController@art_show');
Route::get('/artist/id={artist_id}',  'ArtistController@index');
