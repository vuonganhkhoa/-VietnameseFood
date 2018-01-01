<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PicFood;
use App\Food;

class PicFoodController extends Controller
{

    public function getDanhSach(){
    	$pics = PicFood::with('food')->get();
    	return view('admin.page.food-pics.danhsach', compact('pics'));
    }

    public function getThem(){
    	$food = Food::all();
    	return view('admin.page.food-pics.them', compact('food'));
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    		'HinhMonAn.*' => 'required|image'
    	], 
    	[
    		'HinhMonAn.*.required'=>'Bạn chưa chọn hình món ăn.',
    		'HinhMonAn.*.image'=>'Hình món ăn không đúng định dạng.'
    	]);

    	if($request->hasFile('HinhMonAn')){
	    	foreach($request->file('HinhMonAn') as $img){
	    		$pics = new PicFood;
    			$pics->id_food = $request->TenMonAn;
    			$img->move('adminAssets/img/hinh_mon_an/', time().$img->getClientOriginalName());
    			$pics->image =  time().$img->getClientOriginalName();
    			$pics->save();
	    	}
	    }

    	return redirect()->route('danhsachhinh')->with('success','Thêm hình món ăn thành công.');
    }

    public function getXoa($id){

    		$pic = PicFood::find($id);
    		$pic->delete();
    		return redirect()->back()->with('success', 'Xóa hình món ăn thành công.');
    }

    public function getSua($id){
    	$pic = PicFood::find($id);
    	$food = Food::all();
    	return view('admin.page.food-pics.sua', compact('pic', 'food'));
    }

    public function postSua($id, Request $request){

    	$this->validate($request,[
    		'HinhMonAn.*' => 'image'
    	], 
    	[
    		'HinhMonAn.*.image'=>'Hình món ăn không đúng định dạng.'
    	]);

    	if($request->hasFile('HinhMonAn')){
	    	foreach($request->file('HinhMonAn') as $img){
	    		$pics = PicFood::find($id);
    			$pics->id_food = $request->TenMonAn;
    			$img->move('adminAssets/img/hinh_mon_an/', time().$img->getClientOriginalName());
    			$pics->image =  time().$img->getClientOriginalName();
    			$pics->save();
	    	}
	    }

    	return redirect()->route('danhsachhinh')->with('success','Cập nhật hình món ăn thành công.');
    }
}
