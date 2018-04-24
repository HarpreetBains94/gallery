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



Route::get('/showroom',  'ArtController@index');
Route::get('/showroom/page={page_no}',  'ArtController@page_show');
Route::get('/art_view/id={art_id}',  'ArtController@art_show');
Route::get('/artists/id={id}/page={page_no}', 'ArtistController@show');
Route::get('/artists/page={page_no}', 'ArtistController@index');
Route::get('/arts/page={page_no}', 'ArtController@index');
Route::get('/events/page={page_no}', 'EventController@index');
Route::get('/appointments/page={page_no}', 'AppointmentController@index');
Route::get('/', 'CmsController@home');
Route::resource('events', 'EventController');
Route::resource('appointments', 'AppointmentController');
Route::resource('arts', 'ArtController');
Route::resource('artists', 'ArtistController');
Route::post('/showroom/search', 'ArtController@postSearch')->name('arts.search');
Route::get('/showroom/search', 'ArtController@getSearch');
Route::get('/artist/id={artist_id}',  'ArtistController@index');
Route::get('/artist/id={artist_id}/page={page_no}',  'ArtistController@page_show');
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/banner/edit', 'CmsController@edit_advert');
Route::put('banner/store', 'CmsController@update_advert')->name('banner.update');
