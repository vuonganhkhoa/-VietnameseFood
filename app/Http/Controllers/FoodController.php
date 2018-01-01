<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\FoodType;
use App\PageUrl;
use App\Functions;

class FoodController extends Controller
{
  
    public function getDanhSach(){
    	$foods = Food::with('FoodType')->get();
    	return view('admin.page.food.danhsach', compact('foods'));
    }

    public function getThem(){
    	$foodType = FoodType::all();
    	return view('admin.page.food.them', compact('foodType'));
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    		'TenMonAn' => 'required|unique:foods,name',
    		'NguyenLieu' => 'required',
    		'ChiTiet' => 'required',
    		'HinhMonAn' => 'required|image'
    	], 
    	[
    		'TenMonAn.required'=>'Tên món ăn không được để trống.',
            'TenMonAn.unique'=>'Tên món ăn đã có trong cơ sở dữ liệu.',
    		'NguyenLieu.required'=>'Bạn cần nhập nguyên liệu.',
    		'ChiTiet.required'=>'Bạn cần nhập chi tiết món ăn.',
    		'HinhMonAn.required'=>'Bạn chưa chọn hình món ăn.',
    		'HinhMonAn.image'=>'Hình món ăn không đúng định dạng.'
    	]);

    	$f = new Functions;
    	$url = new PageUrl;
    	$url->url = $f->changeTitle($request->TenMonAn);
    	$url->save();

    	$food = new Food;
    	$food->id_type = $request->LoaiMonAn;
    	$food->id_url = $url->id;
    	$food->name = $request->TenMonAn;
    	$food->summary = $request->NguyenLieu;
    	$food->detail = $request->ChiTiet;
    	$food->price = $request->GiaMonAn;
    	$food->promotion_price = 0;
    	$food->promotion = 'khăn lạnh';
    	$food->update_at = $request->NgayDang;
    	$food->unit = 'dĩa';
    	$food->soluotxem = $request->SoLuotXem;
    	if($request->hasFile('HinhMonAn')){
    		$image = $request->file('HinhMonAn');
    		$image->move('adminAssets/img/hinh_mon_an/', time().$image->getClientOriginalName());
    		$food->image = time().$image->getClientOriginalName();
    	}
    	else{
    		$food->image = '';
    	}

    	$food->save();

    	return redirect()->route('danhsachmonan')->with('success','Thêm món ăn thành công.');
    }

    public function getXoa($id){
    	$food = Food::find($id);
    	$food->delete();
    	return redirect()->back()->with('success', 'Xóa món ăn thành công.');
    }

    public function getSua($id){
    	$food = Food::find($id);
    	$foodType = FoodType::all();
    	return view('admin.page.food.sua', compact('food', 'foodType'));
    }

    public function postSua($id, Request $request){
    	$this->validate($request,[
    		'TenMonAn' => 'required',
    		'NguyenLieu' => 'required',
    		'ChiTiet' => 'required',
    		'HinhMonAn' => 'image'
    	], 
    	[
    		'TenMonAn.required'=>'Tên món ăn không được để trống.',
    		'NguyenLieu.required'=>'Bạn cần nhập nguyên liệu.',
    		'ChiTiet.required'=>'Bạn cần nhập chi tiết món ăn.',
    		'HinhMonAn.image'=>'Hình món ăn không đúng định dạng.'
    	]);

    	$f = new Functions;

    	$food = Food::find($id);
    	$url = PageUrl::find($food->id_url);

    	$url->url = $f->changeTitle($request->TenMonAn);
    	$url->save();

    	$food->id_type = $request->LoaiMonAn;
    	$food->id_url = $url->id;
    	$food->name = $request->TenMonAn;
    	$food->summary = $request->NguyenLieu;
    	$food->detail = $request->ChiTiet;
    	$food->price = $request->GiaMonAn;
    	$food->promotion_price = 0;
    	$food->promotion = 'khăn lạnh';
    	$food->update_at = $request->NgayDang;
    	$food->unit = 'dĩa';
    	$food->soluotxem = $request->SoLuotXem;
    	if($request->hasFile('HinhMonAn')){
    		$image = $request->file('HinhMonAn');
    		$image->move('adminAssets/img/hinh_mon_an/', time().$image->getClientOriginalName());
    		$food->image = time().$image->getClientOriginalName();
    	}

    	$food->save();

    	return redirect()->route('danhsachmonan')->with('success','Cập nhật món ăn thành công.');
    }
}
