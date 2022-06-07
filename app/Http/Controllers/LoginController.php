<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login', ["title" => "Login"]);
    }

    public function loginadmin(){
        return view('login.loginadmin', ["title" => "Login"]);
    }

    public function loginproses(Request $request){
        // $user = User::where('email', $request->email)->get()[0];
        // $user && Hash::check($request->password, $user->password;
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

        return redirect('login');

    }

    public function loginadminproses(Request $request){
        // $user = User::where('email', $request->email)->get()[0];
        // $user && Hash::check($request->password, $user->password;
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

        return redirect('loginadmin');

    }

    public function register(){
        return view ('login.register', ["title" => "Register"]);
    }

    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect('/login');
    }
}
