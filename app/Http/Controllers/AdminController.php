<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function login(){
        return view('user.login');
    }
    public function signIn(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');    
        }else{
            return redirect()->route('signin');
        }
    }
}
