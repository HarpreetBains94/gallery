<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controller\Controllers;

class ArtController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only'=>'']);
    }


    public function index($page_no){
        $skip_no = 0;
        if(is_numeric($page_no)){
            $skip_no = ($page_no - 1) * 5;
        }
        $arts = \DB::table('arts')->orderBy('id')->skip($skip_no)->take(5)->get();
        $page_count = ceil((\DB::table('arts')->get()->count())/5);
        return view('ims.ims_art_edit', compact('arts', 'page_no', 'page_count'));
    }

    public function page_show($page_no){
    	$skip_no = ($page_no - 1) * 9;
    	$images = \DB::table('arts')->orderBy('id')->skip($skip_no)->take(9)->get();
    	$page_count = ceil((\DB::table('arts')->get()->count())/9);
    	return view('showroom', compact('images', 'page_no', 'page_count'));
    }

    public function art_show($art_id){
    	$art = \DB::table('arts')->where('id', $art_id)->get();
    	$artist = \DB::table('artists')->where('id', $art[0]->artist_id)->get();
    	return view('art', compact('art','artist'));
    }

    public function create(){
        $datas = \DB::table('artists')->get();
        $artists = [];
        foreach ($datas as $data) {
            $artists[$data->id] = $data->name;
        }
        return view('ims.ims_art_add', compact('artists'));
    }

    public function store(Request $request){
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

    public function show($page_no){
        $skip_no = 0;
        if(is_numeric($page_no)){
            $skip_no = ($page_no - 1) * 5;
        }
        $arts = \DB::table('arts')->orderBy('id')->skip($skip_no)->take(5)->get();
        $page_count = ceil((\DB::table('arts')->get()->count())/5);
        return view('ims.ims_art_edit', compact('arts', 'page_no', 'page_count'));
    }

    public function update(Request $request, $id){
        return 123;
    }

    public function edit($art_id){
        $datas = \DB::table('artists')->get();
        $artists = [];
        foreach ($datas as $data) {
            $artists[$data->id] = $data->name;
        }
        $art = \DB::table('arts')->where('id', $art_id)->get();
        return view('ims.ims_art_add', compact('art','artists'));
    }
}
