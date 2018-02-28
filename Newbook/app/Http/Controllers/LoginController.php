<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    //
    public function login(){
    	return view('login');
    }

    public function postlogin(LoginRequest $request){
    	$login =[
    		'email'=>request()->input('email'),
    		'password'=>request()->input('password')
    	];
    	if(Auth::attempt($login)){
    		return redirect()->route('book.index');
    	}
    	else{
    		return redirect()->back();
    	}

    	    }

    public function logout(){	
		Auth::logout();
		return redirect()->route('login');
	}	    
}
