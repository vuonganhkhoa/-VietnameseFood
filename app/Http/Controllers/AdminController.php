<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function getWelcome(){
    	$user = User::find(42);
    	return view('admin.page.welcome', compact('user'));
    }
    public function getDangNhap(){
    	return view('admin.login');
    }
    public function postDangNhap(Request $request){
    	$login = array(
            'email' => $request->email,
            'password' => $request->password,
            //'role'=> 'admin'
        );
        if(Auth::attempt($login)){
            return redirect()->route('welcome');
        }
        else{
        	echo "No";
        }
    }
}
