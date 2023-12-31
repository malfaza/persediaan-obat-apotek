<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class sessionController extends Controller
{
    public function index() {
        return view("sesi/index");
    }

    public function login(Request $request) {
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);
        $infologin= [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('products')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Email atau Password tidak valid');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }
}
