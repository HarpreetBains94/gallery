<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index($artist_id){
    	$artist = \DB::table('artists')->where('id', $artist_id)->get();
    	$images = \DB::table('arts')->where('artist_id', $artist_id)->get();
    	$page_count = ceil((\DB::table('arts')->where('id', $artist_id)->get()->count())/9);
    	return view('artists', compact('artist', 'images', 'page_count'));
    }
}
