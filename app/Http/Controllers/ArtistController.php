<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index($artist_id){
    	$artist = \DB::table('artists')->where('id', $artist_id)->get();
    	$images = \DB::table('arts')->where('artist_id', $artist_id)->orderBy('id')->take(3)->get();
    	$page_count = ceil((\DB::table('arts')->where('artist_id', $artist_id)->get()->count())/3);
    	return view('artists', compact('artist', 'images', 'page_count'));
    }

    public function page_show($artist_id, $page_no){
    	$artist = \DB::table('artists')->where('id', $artist_id)->get();
    	$skip_no = ($page_no - 1) * 3;
    	$images = \DB::table('arts')->orderBy('id')->where('artist_id', $artist_id)->skip($skip_no)->take(3)->get();
    	$page_count = ceil((\DB::table('arts')->where('artist_id', $artist_id)->get()->count())/3);
    	return view('artists', compact('artist', 'images', 'page_no', 'page_count'));
    }
}
