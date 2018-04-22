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


Route::get('/', 'CmsController@home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/showroom',  'ArtController@index');
Route::get('/showroom/page={page_no}',  'ArtController@page_show');
Route::get('/art_view/id={art_id}',  'ArtController@art_show');
Route::get('/artists/id={id}/page={page_no}', 'ArtistController@show');
Route::get('/artists/page={page_no}', 'ArtistController@index');
Route::get('/arts/page={page_no}', 'ArtController@index');
Route::get('/events/page={page_no}', 'EventController@index');
Route::get('/appointments/page={page_no}', 'AppointmentController@index');

Route::resource('events', 'EventController');
Route::resource('appointments', 'AppointmentController');
Route::resource('arts', 'ArtController');
// Route::resource('arts/index/', 'ArtController');
// Route::resource('arts/update/', 'ArtController');
Route::resource('artists', 'ArtistController');

Route::get('/staff', 'StaffController@index');
Route::post('/staff/submit', 'StaffController@log_in');
Route::post('/showroom/search', 'ArtController@postSearch')->name('arts.search');
Route::get('/showroom/search', 'ArtController@getSearch');





Route::get('/artist/id={artist_id}',  'ArtistController@index');
Route::get('/artist/id={artist_id}/page={page_no}',  'ArtistController@page_show');


Auth::routes();


Auth::routes();


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('/cms', 'CmsController@index');


// Route::get('/ims', 'ImsController@index');
// Route::get('/ims/art', 'ImsController@art_options');
// Route::get('/ims/art/add', 'ImsController@add_art');
// Route::get('/ims/art/edit', 'ImsController@edit_art');
// Route::get('/ims/art/edit/page={page_no}', 'ImsController@edit_art_page_show');
// Route::get('/ims/art/remove', 'ImsController@remove_art');
// Route::post('/ims/art/store','ImsController@art_post');
// Route::put('/ims/art/edit/id={art_id}/update','ImsController@update_art_success');
//change

// Route::get('/ims/artist/add', 'ImsController@add_artist');
// Route::get('/ims/artist/edit', 'ImsController@edit_artist');
// Route::get('/ims/artist/edit/page={page_no}', 'ImsController@edit_artist_page_show');
// Route::post('/ims/artist/store','ImsController@artist_post');
// Route::patch('/ims/artist/update','ImsController@artist_update');
// Route::get('/ims/artist/edit/id={artist_id}',  'ImsController@update_artist');

// Route::get('cms/event/add', 'CmsController@add_event');

Route::get('/banner/edit', 'CmsController@edit_advert');
Route::put('banner/store', 'CmsController@update_advert')->name('banner.update');