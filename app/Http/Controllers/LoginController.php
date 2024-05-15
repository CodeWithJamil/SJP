<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $dataa = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($dataa)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
