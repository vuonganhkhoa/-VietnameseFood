<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Food;
use Auth;

class AdminController extends Controller
{

    public function getDangNhap(){
    	return view('admin.login');
    }

    public function postDangNhap(Request $request){
    	$loginEmail = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        $loginUsername = array(
            'username' => $request->email,
            'password' => $request->password,
        );
        if(Auth::attempt($loginEmail)){
            return redirect()->route('welcome');
        }
        elseif(Auth::attempt($loginUsername)){
            return redirect()->route('welcome');
        }
        else{
        	return redirect()->back()->with('error', 'Tên hoặc mật khẩu không đúng.');
        }
    }

    public function getDangXuat(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function getWelcome(){
        $id = Auth::id();
        $user = User::find($id);
        return view('admin.page.welcome', compact('user'));
    }


}
