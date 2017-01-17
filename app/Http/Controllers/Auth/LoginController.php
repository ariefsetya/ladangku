<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    	return view('auth.login');
    }
    public function login()
    {
    	$credentials = ['email'=>Input::get('email'),'password'=>Input::get('password')];

    	if(strlen(Input::get('password'))==4){
    		$credentials['email'] = $credentials['email']."@".$credentials['password'];
    	}

    	if(Auth::attempt($credentials)){
    		if(Auth::user()->level==1){
    			return redirect()->route('admin.dashboard');
    		}else{
    			return redirect()->route('farmer.dashboard');
    		}
    	}else{
    		return redirect()->route('login')->with('failed');
    	}
    }
    public function logout()
    {
    	Auth::logout();

    	return redirect(url(''));
    }
}
