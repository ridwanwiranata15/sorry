<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
    public function signup(Request $request){
        $register =   User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'role' => 'admin'
                    ]);
        if($register){
            return redirect()->back()->with('success', 'Selamat! anda berhasil mendaftar');
        } else{
            return redirect()->back()->with('failed', 'maaf anda gagal mendaftar');
        }
    }
    public function signin(Request $request){
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($login)){
            return redirect()->route('pasien.index')->with('success', 'Selamat datang admin, selamat bekerja');
        }else{
            return redirect()->back()->with('failed', 'password atau username salah');
        }
    }
    public function signout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
