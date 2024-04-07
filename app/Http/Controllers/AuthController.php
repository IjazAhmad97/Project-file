<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.registration');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->with('success', 'credential success');
    }
    public function show(){
        return view('Auth.login');
    }
    public function loginstore(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);
        $credential = $request->only('email', 'password');
        if(Auth::attempt($credential)){
          return redirect()->intended(route('student.data'));
        }
        return redirect()->route('login')->with('error', 'email and password incorect');
    }
    public function destroy(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
