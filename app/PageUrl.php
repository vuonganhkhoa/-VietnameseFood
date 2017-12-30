<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageUrl extends Model
{
    protected $table = 'page_url';
    public $timestamps = false;

    public function Food(){
    	return $this->hasOne('App\Food', 'id_url', 'id');
    }
}
