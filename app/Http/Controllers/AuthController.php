<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register()
    {
        return view('/register');
    }

    function store(Request $request)
    {
        DB::table('masyarakat')->insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
    }
}
