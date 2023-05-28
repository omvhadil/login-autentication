<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create() {
        return view('auth._login');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        };

        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)){
        //         Auth::login($user);

        // return redirect()->route('home');

        //     }
        // };

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->onlyInput('email');

    }
}