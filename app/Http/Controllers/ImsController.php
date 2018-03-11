<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Art;

class ImsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
    	return view('ims');
    }

    public function art_options(){
    	return view('ims.ims_art');
    }

    public function add_art(){
    	$datas = \DB::table('artists')->get();
        $artists = [];
        foreach ($datas as $data) {
            $artists[$data->id] = $data->name;
        }
    	return view('ims.ims_art_add', compact('artists'));
    }

    public function edit_art(){
        $arts = \DB::table('arts')->orderby('id')->get();
    	return view('ims.ims_art_edit', compact('arts'));
    }

    public function remove_art(){
    	return view('ims.ims_art_remove');
    }

    public function art_post(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'artist' => 'required',
    		'price' => 'required',
    		'dimensions' => 'required',
    		'date' => 'required',
    		'image' => 'image|required|max:1999',
    		'description' => 'required',
            'medium' => 'required'

    	]);

    	//creating new filename for storage.
    	$fileNameWithEx =  $request->file('image')->getClientOriginalName();

    	$fileName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);

    	$extension = $request->file('image')->getClientOriginalExtension();

    	$fileNameToStore = $fileName.'_'.time().'.'.$extension;

    	//storing file.

    	$path = $request->file('image')->storeAs('/public/media/test_images', $fileNameToStore);

        $art = new Art;
        $art->title = $request->input('title');
        $art->artist_id = $request->input('artist');
        $art->image_path = $fileNameToStore;
        $art->medium = $request->input('medium');
        $art->dimensions = $request->input('dimensions');
        $art->price = $request->input('price');
        $art->creation_date = $request->input('date');
        $art->creation_date->format('Y-m-d');
        $art->description = $request->input('description');
        $art->on_sale = 0;

        $art->save();

    	return redirect()->back()->with('message', 'Art added successfully');
    	
    }

    public function update_art($art_id){
        $datas = \DB::table('artists')->get();
        $artists = [];
        foreach ($datas as $data) {
            $artists[$data->id] = $data->name;
        }
        $art = \DB::table('arts')->where('id', $art_id)->get();
        return view('ims.ims_art_add', compact('art','artists'));
    }
}
