<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodType;
use App\Food;

class FoodTypeController extends Controller
{
  
    public function getDanhSach(){
    	$foodType = FoodType::all();
    	return view('admin.page.food-type.danhsach', compact('foodType'));
    }

    public function getThem(){
    	return view('admin.page.food-type.them');
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    		'TenLoaiMonAn' => 'required',
    		'MoTaLoaiMonAn' => 'required',
    		'HinhLoaiMonAn' => 'required|image'
    	], 
    	[
    		'TenLoaiMonAn.required'=>'Tên loại món ăn không được để trống.',
    		'MoTaLoaiMonAn.required'=>'Bạn cần nhập mô tả loại món ăn.',
    		'HinhLoaiMonAn.required'=>'Bạn chưa chọn hình loại món ăn.',
    		'HinhLoaiMonAn.image'=>'Hình loại món ăn không đúng định dạng.'
    	]);

    	$foodType = new FoodType;
    	$foodType->name = $request->TenLoaiMonAn;
    	$foodType->description = $request->MoTaLoaiMonAn;
    	if($request->hasFile('HinhLoaiMonAn')){
    		$img = $request->file('HinhLoaiMonAn');
    		$img->move('adminAssets/img/hinh_loai_mon_an/', time().$img->getClientOriginalName());
    		$foodType->image =  time().$img->getClientOriginalName();
    	}
    	else{
    		$foodType->image = '';
    	}
    	$foodType->save();

    	return redirect()->route('danhsachloaimonan')->with('success','Thêm loại món ăn thành công.');
    }

    public function getXoa($id){

    	$so_thuc_an_trong_loai = Food::where('id_type', $id)->count();
    	if($so_thuc_an_trong_loai == 0){
    		$foodType = FoodType::find($id);
    		$foodType->delete();
    		return redirect()->back()->with('success', 'Xóa loại món ăn thành công.');
    	}
    	return redirect()->back()->with('error', 'LỖI!!! Xóa không thành công (Có thức ăn trong loại).');
    }

    public function getSua($id){
    	$foodType = FoodType::find($id);
    	return view('admin.page.food-type.sua', compact('foodType'));
    }

    public function postSua($id, Request $request){

    	$this->validate($request,[
    		'TenLoaiMonAn' => 'required',
    		'MoTaLoaiMonAn' => 'required',
    		'HinhLoaiMonAn' => 'image'
    	], 
    	[
    		'TenLoaiMonAn.required'=>'Tên loại món ăn không được để trống.',
    		'MoTaLoaiMonAn.required'=>'Bạn cần nhập mô tả.',
    		'HinhLoaiMonAn.image'=>'Hình loại món ăn không đúng định dạng.'
    	]);

    	$foodType = FoodType::find($id);
    	$foodType->name = $request->TenLoaiMonAn;
    	$foodType->description = $request->MoTaLoaiMonAn;
    	if($request->hasFile('HinhLoaiMonAn')){
    		$img = $request->file('HinhLoaiMonAn');
    		$img->move('adminAssets/img/hinh_loai_mon_an/', time().$img->getClientOriginalName());
    		$foodType->image =  time().$img->getClientOriginalName();
    	}
    	$foodType->save();

    	return redirect()->route('danhsachloaimonan')->with('success','Cập nhật loại món ăn thành công.');
    }
}


