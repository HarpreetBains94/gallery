<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	public $timestamps = false;
	protected $fillable = array('name', 'image_path', 'bio');

    public function art(){
    	return $this->hasMany('App\Art');
    }
}
