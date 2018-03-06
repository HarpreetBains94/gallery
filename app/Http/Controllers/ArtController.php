<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index(){
    	$images = \DB::table('arts')->orderBy('id')->take(9)->get();
    	return view('showroom', compact('images'));
    }
}
