<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\FoodCountry;

class FoodCountryController extends Controller
{
     public function getDanhSach(){
    	$foodCountry = FoodCountry::all();
    	return view('admin.page.food-country.danhsach', compact('foodCountry'));
    }

    public function getThem(){
    	return view('admin.page.food-country.them');
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    		'TenNuoc' => 'required',
    		'MoTaMonAnNuoc' => 'required',
    		'HinhMonAnNuoc' => 'required|image'
    	], 
    	[
    		'TenNuoc.required'=>'Tên không được để trống.',
    		'MoTaMonAnNuoc.required'=>'Bạn cần nhập mô tả.',
    		'HinhMonAnNuoc.required'=>'Bạn chưa chọn hình.',
    		'HinhMonAnNuoc.image'=>'Hình không đúng định dạng.'
    	]);

    	$foodCountry = new FoodCountry;
    	$foodCountry->name = $request->TenNuoc;
    	$foodCountry->description = $request->MoTaMonAnNuoc;
    	if($request->hasFile('HinhMonAnNuoc')){
    		$img = $request->file('HinhMonAnNuoc');
    		$img->move('adminAssets/img/hinh_mon_an_cac_nuoc/', time().$img->getClientOriginalName());
    		$foodCountry->image =  time().$img->getClientOriginalName();
    	}
    	else{
    		$foodCountry->image = '';
    	}
    	$foodCountry->save();

    	return redirect()->route('danhsachmonanthegioi')->with('success','Thêm thành công.');
    }

    public function getXoa($id){

    	$so_thuc_an = Food::where('id_country', $id)->first();
    	if($so_thuc_an == 0){
    		$foodCountry = FoodCountry::find($id);
    		$foodCountry->delete();
    		return redirect()->back()->with('success', 'Xóa thành công.');
    	}
    	return redirect()->back()->with('error', 'LỖI!!! Xóa không thành công (Có thức ăn trong nước đó).');
    }

    public function getSua($id){
    	$foodCountry = FoodCountry::find($id);
    	return view('admin.page.food-country.sua', compact('foodCountry'));
    }

    public function postSua($id, Request $request){

    	$this->validate($request,[
    		'TenNuoc' => 'required',
    		'MoTaMonAnNuoc' => 'required',
    		'HinhMonAnNuoc' => 'image'
    	], 
    	[
    		'TenNuoc.required'=>'Tên không được để trống.',
    		'MoTaMonAnNuoc.required'=>'Bạn cần nhập mô tả.',
    		'HinhMonAnNuoc.image'=>'Hình không đúng định dạng.'
    	]);

    	$foodCountry = FoodCountry::find($id);
    	$foodCountry->name = $request->TenNuoc;
    	$foodCountry->description = $request->MoTaMonAnNuoc;
    	if($request->hasFile('HinhMonAnNuoc')){
    		$img = $request->file('HinhMonAnNuoc');
    		$img->move('adminAssets/img/hinh_mon_an_cac_nuoc/', time().$img->getClientOriginalName());
    		$foodCountry->image =  time().$img->getClientOriginalName();
    	}
    	$foodCountry->save();

    	return redirect()->route('danhsachmonanthegioi')->with('success','Cập nhật thành công.');
    }
}
