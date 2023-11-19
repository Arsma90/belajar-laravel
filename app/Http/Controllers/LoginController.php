<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(){
        return view("/login");
    }

    function login(Request $request){
        $data = $request->only('username', 'password');
        $masuk = Auth::attempt($data);  
        if($masuk){
            return redirect('/halutama');
        }else{
            return redirect('/login')->with('error', 'username atau password salah');
        }
    }
    
    function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
