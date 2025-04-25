<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class AuthController extends Controller
{

    public function ShowRegister()
    {
        return view('auth.register');
    }

    public function Register(Request $Request) {
        $validasi = Validator::make($Request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => 'required',   
        ]);
        $data = $validasi->validate();
        if ($validasi->fails()) {
            return response()->json([
                'errors' => $validasi->errors()
            ]);
        }

        $user = User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password'])  ,
        ]);

        return response()->json(['message' => 'Berhasil!', 'data' => $user], 201);
        // return redirect('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function ShowLogin()
    {
        return view('auth.login');
    }

    public function Login(Request $Request)
    {
        #validasi atau menampung
        // $validasi = Validator::make($Request->all(),[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',   
        // ]);

        $validasi = $Request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $Request->email)->first();
        // if ($validasi->fails()) {
        //     return response()->json($validasi->errors(), 422);
        // }

        #Mengecek apakah sudah benar atau belum
        if (Auth::attempt($validasi)) {
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'Login berhasil!',
                'access_token' => $token,
                'token_type' => 'Bearer',
            ],200);
        } else {      
            return response()->json([
                'error' => 'Username atau Password salah'
            ]);
        }

    }
    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
