<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

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
            'role'=> 2,
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
        // $validasi = $Request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        $validasi = Validator::make($Request->all(),[
            'email' => 'required|email',
            'password' => 'required',   
        ]);
        
        $user = User::where('email', $Request->email)->first();
        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 422);
        }

        if (!$user || !Hash::check($Request->password, $user->password)) {
            return response()->json(['messages' => 'email atau password salah'],422);
        }else{
            $user->tokens()->delete();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'Login berhasil!',
                'data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ],200);
        }
    }
    public function Logout(Request $request)
    {
        // $user = $request;
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'messages' => 'anda berhasil loguot',
            // 'data' => $user
        ]);
    }
}
