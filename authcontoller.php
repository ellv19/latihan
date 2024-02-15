<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authcontoller extends Controller
{
    public function regist(){
        return view('auth.register');
    }

    public function act_regist(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);
        return redirect('/login');
    }

    public function login(){
        return view('auth.login');
    }

    public function act_login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect('/pelanggan');
        }
        else{
            'password salah';
        }
    }
}
