<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResController extends Controller
{
    
    public function getTrangChu(){
    	return view('res.page.trangchu');
    }
}
