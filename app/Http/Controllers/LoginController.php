<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use Auth;

class LoginController extends Controller
{
    //Menampilkan Halaman Login
    public function index()
    {
        return view('login');
    }

    //Melakukan Login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        
        if (!Auth::attempt($request->only('username','password'))) {
            return redirect()->back()->with('message','Login gagal, username dan password tidak cocok.');
        } else {
            return redirect('/dashboard');
        }
    }

    //Melakukan Logout
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
