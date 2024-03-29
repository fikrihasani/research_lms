<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class AuthController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 1) {
                return redirect()->intended('/admin');
                # code...
            }else{
                return redirect()->intended('/guru');
            }
        }
        return back()->with('loginError','Login Failed');
    }

    public function logout(){
        Auth::logout();    
        return redirect('/');
    }
}
