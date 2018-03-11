<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
	public $timestamps = false;

	protected $table = 'arts';

	protected $dates = ['date', 'creation_date'];

    protected $fillable = array('title', 'image_path', 'price','dimensions', 'description', 'creation_date', 'artist', 'on_sale', 'medium');

    public function artist(){
    	$this->belongsTo('App\Artist');
    }
}
