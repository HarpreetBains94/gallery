<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        return view('blog');
    }

    public function add_event(){
    	return view('cms.add_event');
    }

    public function edit_advert(){
    	return view('cms.banner_add');
    }
}
