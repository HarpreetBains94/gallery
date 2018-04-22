<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Banner;

class CmsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['home']]);
    }

    public function edit_advert(){
    	return view('cms.banner_add');
    }

    public function update_advert(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'image' => 'image|required|max:1999',
        ]);

        //creating new filename for storage.



        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('storage/media/banner_images/' . $fileName);
        Image::make($image)->save($location);

        //storing file.

        $banner = Banner::find(1);
        $banner->title = $request->input('title');
        $banner->text = $request->input('text');
        $banner->image = $fileName;

        $banner->save();

        return redirect('/');
    }

    public function home(){
        $banner = Banner::find(1);
        return view('home', compact('banner'));
    }
}
