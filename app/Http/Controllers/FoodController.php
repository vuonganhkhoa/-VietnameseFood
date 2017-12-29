<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function getWelcome(){
    	return view('admin.page.welcome');
    }
    public function getDanhSach(){
    	return 'danhsach';
    }
}
