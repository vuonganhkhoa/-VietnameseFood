<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCountry extends Model
{
    protected $table = 'food_country';
    public $timestamps = false;

    public function Food(){
    	return $this->hasMany('App\Food', 'id_country', 'id');
    }
}
