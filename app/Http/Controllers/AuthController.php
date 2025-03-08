<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class AuthController extends Controller
{

    public function ShowRegister()
    {
        return view('auth.register');
    }

    public function Register(Request $Request) {
        $validasi = $Request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'name'=> $Request->name,
            'email'=> $Request->email,
            'password'=> $Request->password,

        ]);

        return redirect('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function ShowLogin()
    {
        return view('auth.login');
    }

    public function Login(Request $Request)
    {
        #validasi atau menampung
        $validasi = $Request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        #Mengecek apakah sudah benar atau belum
        if (Auth::attempt($validasi)) {
            return redirect()->route('admin');
        } else {
            return back()->withErrors('Username atau Email Masih Salah');
        }
    }
    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
