<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\FoodCountry;

class ResController extends Controller
{
    
    public function getTrangChu(){

    	$foods_soup = Food::where('id_type', 6)->orderBy('id', 'DESC')->limit(6)->get();
    	$foods_meat = Food::where('id_type', 4)->orderBy('id', 'DESC')->limit(6)->get();
    	$foods_xao	= Food::where('id_type', 14)->orderBy('id', 'DESC')->limit(6)->get();
    	$foods_rice	= Food::where('id_type', 3)->orderBy('id', 'DESC')->limit(6)->get();
    	$foods_desert	= Food::where('id_type', 10)->orderBy('id', 'DESC')->limit(6)->get();
    	$foods_top	= Food::orderBy('soluotxem', 'DESC')->limit(6)->get();

    	return view('res.page.trangchu', compact('foods_soup', 'foods_meat', 'foods_xao', 'foods_rice', 'foods_desert', 'foods_top'));
    }

    public function getDanhSachTatCaMonAn(){
    	$foods = Food::orderBy('id', 'DESC')->paginate(6);
    	return view('res.page.cac_mon_an', compact('foods'));
    }

    public function getDanhSachTatCaCacNuoc(){
    	$country = FoodCountry::all();
    	return view('res.page.cac_nuoc', compact('country'));
    }

    public function getDanhSachMonAnTheoNuoc($id){
    	$foods = Food::where('id_country', $id)->get();
    	$country = FoodCountry::where('id', $id)->first();
    	return view('res.page.mon_an_theo_nuoc', compact('foods', 'country'));
    }

    public function getChiTietMonAn($id){
    	echo $id;
    }
}
