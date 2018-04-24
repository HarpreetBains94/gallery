<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	public $timestamps = false;
	protected $fillable = array('name', 'image_path', 'bio');

	public static $rules = [
		    'name' => 'required',
            'image' => 'image|required|max:1999',
            'bio' => 'required',
	];

    public function art(){
    	return $this->hasMany('App\Art');
    }

    public function getRules(){
        return self::$rules;
    }
}
