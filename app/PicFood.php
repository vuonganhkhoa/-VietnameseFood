<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicFood extends Model
{
    protected $table = 'pics_food';
    public $timestamps = false;

    public function Food(){
    	return $this->belongsTo('App\Food', 'id_food', 'id');
    }
}
