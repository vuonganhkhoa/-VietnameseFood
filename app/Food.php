<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $table = 'foods';
    public $timestamps = false;

    public function FoodType(){
    	return $this->belongsTo('App\FoodType', 'id_type', 'id');
    }
    public function Comment(){
    	return $this->hasMany('App\Comment', 'id_food', 'id');
    }
    public function PicFood(){
    	return $this->hasMany('App\PicFood', 'id_food', 'id');
    }
    public function PageUrl(){
    	return $this->belongsTo('App\PageUrl', 'id_url', 'id');
    }
}
