<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controller\Controllers;
use App\Artist;
use Auth;
use Image;
class ArtistController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['show']]);
    }



    public function index($page_no){
    	$skip_no = ($page_no - 1) * 4;
        $artists = \DB::table('artists')->orderBy('id')->skip($skip_no)->take(4)->get();
        $page_count = ceil((\DB::table('artists')->get()->count())/4);
        return view('ims.ims_artist_edit', compact('artists', 'page_no', 'page_count'));
    }

    public function show($artist_id, $page_no){
    	$artist = \DB::table('artists')->where('id', $artist_id)->get();
    	$skip_no = ($page_no - 1) * 3;
    	$images = \DB::table('arts')->orderBy('id')->where('artist_id', $artist_id)->skip($skip_no)->take(3)->get();
    	$page_count = ceil((\DB::table('arts')->where('artist_id', $artist_id)->get()->count())/3);
    	return view('artists', compact('artist', 'images', 'page_no', 'page_count'));
    }

    public function create(){
        return view('ims.ims_artist_add');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|required|max:1999',
            'bio' => 'required',

        ]);

        //creating new filename for storage.
        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('storage/media/artist_images/' . $fileName);
        Image::make($image)->save($location);

        //storing file.


        $artist = new Artist;
        $artist->name = $request->input('name');
        $artist->image_path = $fileName;
        $artist->bio = $request->input('bio');

        $artist->save();

        return redirect()->back()->with('message', 'Artist added successfully');
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|required|max:1999',
            'bio' => 'required',

        ]);

        //creating new filename for storage.
        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('storage/media/artist_images/' . $fileName);
        Image::make($image)->save($location);

        //storing file.


        $artist = Artist::find($id);
        $artist->name = $request->input('name');
        $artist->image_path = $fileName;
        $artist->bio = $request->input('bio');

        $artist->save();

        return redirect()->back()->with('message', 'Artist updated successfully');
    }

    public function edit($artist_id){
        $artist = \DB::table('artists')->where('id', $artist_id)->get();
        return view('ims.ims_artist_add', compact('artist'));
    }

    public function destroy($id){
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('artists/page=1');
    }
}
