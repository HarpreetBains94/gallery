<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index(){
    	$images = \DB::table('arts')->orderBy('id')->take(9)->get();
    	$page_count = ceil((\DB::table('arts')->get()->count())/9);
    	return view('showroom', compact('images', 'page_count'));
    }

    public function page_show($page_no){
    	$skip_no = ($page_no - 1) * 9;
    	$images = \DB::table('arts')->orderBy('id')->skip($skip_no)->take(9)->get();
    	$page_count = ceil((\DB::table('arts')->get()->count())/9);
    	return view('showroom', compact('images', 'page_no', 'page_count'));
    }
}
