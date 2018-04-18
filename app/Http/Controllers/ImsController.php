<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Http\Reqests;
use App\Art;
use App\Artist;
use Auth;

class ImsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    // public function index(){
    // 	return view('ims');
    // }

    // public function art_options(){
    // 	return view('ims.ims_art');
    // }

    // public function add_art(){
    // 	$datas = \DB::table('artists')->get();
    //     $artists = [];
    //     foreach ($datas as $data) {
    //         $artists[$data->id] = $data->name;
    //     }
    // 	return view('ims.ims_art_add', compact('artists'));
    // }

    // public function edit_art(){
    //     $arts = \DB::table('arts')->orderby('id')->take(5)->get();
    //     $page_count = ceil((\DB::table('arts')->get()->count())/5);
    // 	return view('ims.ims_art_edit', compact('arts', 'page_count'));
    // }

    // public function edit_art_page_show($page_no){
    //     $skip_no = ($page_no - 1) * 5;
    //     $arts = \DB::table('arts')->orderBy('id')->skip($skip_no)->take(5)->get();
    //     $page_count = ceil((\DB::table('arts')->get()->count())/5);
    //     return view('ims.ims_art_edit', compact('arts', 'page_no', 'page_count'));
    // }

    // public function remove_art(){
    // 	return view('ims.ims_art_remove');
    // }

    // public function art_post(Request $request){
    // 	$this->validate($request, [
    // 		'title' => 'required',
    // 		'artist' => 'required',
    // 		'price' => 'required',
    // 		'dimensions' => 'required',
    // 		'date' => 'required',
    // 		'image' => 'image|required|max:1999',
    // 		'description' => 'required',
    //         'medium' => 'required'

    // 	]);

    // 	//creating new filename for storage.
    // 	$fileNameWithEx =  $request->file('image')->getClientOriginalName();

    // 	$fileName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);

    // 	$extension = $request->file('image')->getClientOriginalExtension();

    // 	$fileNameToStore = $fileName.'_'.time().'.'.$extension;

    // 	//storing file.

    // 	$path = $request->file('image')->storeAs('/public/media/test_images', $fileNameToStore);

    //     $art = new Art;
    //     $art->title = $request->input('title');
    //     $art->artist_id = $request->input('artist');
    //     $art->image_path = $fileNameToStore;
    //     $art->medium = $request->input('medium');
    //     $art->dimensions = $request->input('dimensions');
    //     $art->price = $request->input('price');
    //     $art->creation_date = $request->input('date');
    //     $art->creation_date->format('Y-m-d');
    //     $art->description = $request->input('description');
    //     $art->on_sale = 0;

    //     $art->save();

    // 	return redirect()->back()->with('message', 'Art added successfully');
    	
    // }

    // public function update_art_success(Request $request, $id){
    //     return 123;
    // }

    // public function update_art($art_id){
    //     $datas = \DB::table('artists')->get();
    //     $artists = [];
    //     foreach ($datas as $data) {
    //         $artists[$data->id] = $data->name;
    //     }
    //     $art = \DB::table('arts')->where('id', $art_id)->get();
    //     return view('ims.ims_art_add', compact('art','artists'));
    // }

    public function logout(){
        Auth::logout();

        return view('welcome');
    }





    // public function add_artist(){
    //     return view('ims.ims_artist_add');
    // }

    // public function edit_artist(){
    //     $artists = \DB::table('artists')->orderby('id')->take(4)->get();
    //     $page_count = ceil((\DB::table('artists')->get()->count())/4);
    //     return view('ims.ims_artist_edit', compact('artists', 'page_count'));
    // }

    // public function edit_artist_page_show($page_no){
    //     $skip_no = ($page_no - 1) * 4;
    //     $artists = \DB::table('artists')->orderBy('id')->skip($skip_no)->take(4)->get();
    //     $page_count = ceil((\DB::table('artists')->get()->count())/4);
    //     return view('ims.ims_artist_edit', compact('artists', 'page_no', 'page_count'));
    // }

    // public function artist_post(Request $request){
    //         $this->validate($request, [
    //         'name' => 'required',
    //         'image' => 'image|required|max:1999',
    //         'bio' => 'required',

    //     ]);

    //     //creating new filename for storage.
    //     $fileNameWithEx =  $request->file('image')->getClientOriginalName();

    //     $fileName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);

    //     $extension = $request->file('image')->getClientOriginalExtension();

    //     $fileNameToStore = $fileName.'_'.time().'.'.$extension;

    //     //storing file.

    //     $path = $request->file('image')->storeAs('/public/media/artist_images', $fileNameToStore);

    //     $artist = new Artist;
    //     $artist->name = $request->input('name');
    //     $artist->image_path = $fileNameToStore;
    //     $artist->bio = $request->input('bio');

    //     $artist->save();

    //     return redirect()->back()->with('message', 'Artist added successfully');
        
    // }

    // public function artist_update(){
    //     return 123;
    // }

    // public function update_artist($artist_id){
    //     $artist = \DB::table('artists')->where('id', $artist_id)->get();
    //     return view('ims.ims_artist_add', compact('artist'));
    // }
}
