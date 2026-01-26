<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Showlogin()
    {
        return view('auth.login');
    }

    public function Storelogin(Request $request)
    {
        $data = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        return redirect('/')
            ->with('success', 'Login berhasil');
    }
}
