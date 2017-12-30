<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comment';
    public $timestamps = false;

    public function Food(){
    	return $this->belongsTo('App\Food', 'id_food', 'id');
    }
}
