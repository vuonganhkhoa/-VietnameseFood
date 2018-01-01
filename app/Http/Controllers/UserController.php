<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function getDanhSach(){
    	$user = User::all();
    	return view('admin.page.admin.danhsach', compact('user'));
    }

    public function getThem(){
    	return view('admin.page.admin.them');
    }

    public function postThem(Request $request){

    	$this->validate($request,[
    		'Username' => 'required|unique:users,username',
    		'Password' => 'required|min:6',
    		'PasswordConfirm'=>'required|same:Password',
    		'HoTen' => 'required',
    		'Email' => 'required|email|unique:users,email',
    		'DiaChi' => 'required',
    		'DienThoai'=>'numeric',
    		'HinhDaiDien' => 'image'
    	], 
    	[
    		'Username.required'=>'Tên đăng nhập không được để trống.',
    		'Username.unique'=>'Tên đăng nhập đã có người sử dụng.',
    		'Password.required'=>'Bạn cần nhập mật khẩu.',
    		'Password.min'=>'Mật khẩu bạn nhập quá ngắn ( cần trên 6 kí tự).',
    		'PasswordConfirm.required'=>'Bạn cần nhập mật khẩu xác nhận.',
    		'PasswordConfirm.same'=>'Mật khẩu nhập lại không giống.',
    		'HoTen.required'=>'Họ tên không được để trống.',
    		'Email.required'=>'Bạn cần nhập địa chỉ email.',
    		'Email.email'=>'Địa chỉ email không đúng định dạng.',
    		'Email.unique'=>'Email đã có người sử dụng.',
    		'DiaChi.required'=>'Bạn cần nhập địa chỉ nhà.',
    		'DienThoai.numeric'=>'Số diện thoại bạn nhập không đúng.',
    		'HinhDaiDien.image'=>'Hình không đúng định dạng.'
    	]);

    	$user = new user;
    	$user->username  = $request->Username;
    	$user->password  = Hash::make($request->Password);
    	$user->fullname  = $request->HoTen;
    	$user->email     = $request->Email;
    	$user->birthdate = $request->NgaySinh;
    	$user->gender    = $request->GioiTinh;
    	$user->address   = $request->DiaChi;
    	$user->phone     = $request->DienThoai;
    	$user->role      = $request->Quyen;
    	if($request->hasFile('HinhDaiDien')){
    		$img = $request->file('HinhDaiDien');
    		$img->move('adminAssets/img/photos/', time().$img->getClientOriginalName());
    		$user->image =  time().$img->getClientOriginalName();
    	}
    	else{
    		$user->image = 'noone.png';
    	}
    	$user->save();

    	return redirect()->route('danhsachnguoiquantri')->with('success','Thêm người quản trị thành công.');
    }

    public function getXoa($id){

    	if(Auth::user()->role == 'superadmin'){
            $user = User::find($id);
    		$user->delete();
    		return redirect()->back()->with('success', 'Xóa thành công.');
    	}
    	return redirect()->back()->with('error', 'Bạn không có quyền xóa người này.');
    }

    public function getSua($id){

        if(Auth::user()->role == 'superadmin'){
            $user = User::find($id);
            return view('admin.page.admin.sua', compact('user'));
        }
    	return redirect()->back()->with('error', 'Bạn không có quyền sửa người này.');
    }

    public function postSua($id, Request $request){

    	$this->validate($request,[
    		'Username' => 'required',
    		'Password' => 'required|min:6',
    		'PasswordConfirm'=>'required|same:Password',
    		'HoTen' => 'required',
    		'Email' => 'required|email',
    		'DiaChi' => 'required',
    		'DienThoai'=>'numeric',
    		'HinhDaiDien' => 'image'
    	], 
    	[
    		'Username.required'=>'Tên đăng nhập không được để trống.',
    		'Password.required'=>'Bạn cần nhập mật khẩu.',
    		'Password.min'=>'Mật khẩu bạn nhập quá ngắn ( cần trên 6 kí tự).',
    		'PasswordConfirm.required'=>'Bạn cần nhập mật khẩu xác nhận.',
    		'PasswordConfirm.same'=>'Mật khẩu nhập lại không giống.',
    		'HoTen.required'=>'Họ tên không được để trống.',
    		'Email.required'=>'Bạn cần nhập địa chỉ email.',
    		'Email.email'=>'Địa chỉ email không đúng định dạng.',
    		'DiaChi.required'=>'Bạn cần nhập địa chỉ nhà.',
    		'DienThoai.numeric'=>'Số diện thoại bạn nhập không đúng.',
    		'HinhDaiDien.image'=>'Hình không đúng định dạng.'
    	]);

    	$user = User::find($id);
    	$user->username  = $request->Username;
    	$user->password  = Hash::make($request->Password);
    	$user->fullname  = $request->HoTen;
    	$user->email     = $request->Email;
    	$user->birthdate = $request->NgaySinh;
    	$user->gender    = $request->GioiTinh;
    	$user->address   = $request->DiaChi;
    	$user->phone     = $request->DienThoai;
    	$user->role      = $request->Quyen;
    	if($request->hasFile('HinhDaiDien')){
    		$img = $request->file('HinhDaiDien');
    		$img->move('adminAssets/img/photos/', time().$img->getClientOriginalName());
    		$user->image =  time().$img->getClientOriginalName();
    	}
    	$user->save();

    	return redirect()->route('danhsachnguoiquantri')->with('success','Cập nhật người quản trị thành công.');
    }
}
