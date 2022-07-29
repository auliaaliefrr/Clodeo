<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginproses(Request $request)
    {

        if (Auth::attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return redirect('login');
        }
        // dd($request);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
