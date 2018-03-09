<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
    	return view('staff');
    }

    public function log_in(Request $request){
    	$this->validate($request,[
    		'email' => 'required',
    		'password' => 'required'
    	]);
    	return 'success';
    }	
}
