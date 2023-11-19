<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPetugasController extends Controller
{
    function index(){
        return view('loginpetugas');
    }

     function login(Request $request){
        $data = $request->only('username', 'password');
        if(Auth::guard('petugas')->attempt($data)){
            echo "Login Success";
        }else{
            return redirect("loginpetugas")->with("error", "Username atau Password Yang Anda Masukan Salah!!");
        }
    }
}
