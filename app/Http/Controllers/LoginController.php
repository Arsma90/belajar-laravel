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
        return view("login");
    }
    function login(Request $request){
        
        if(Auth::attempt($request->only("username", "password"))){
            return redirect("/halutama");
        }

        return "Maaf, Username atau Password Yang Anda Masukan Salah!!";
    }
    
    function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
