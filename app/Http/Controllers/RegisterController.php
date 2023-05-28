<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('auth._register');
    }

    public function store(Request $request) {
        $request->validate([
            // minimal 4 karakter dan maksimal 30 karakter untuk username dan harus berupa string
            'username' => ['required', 'unique:users', 'alpha_num', 'min:4', 'max:30'],
            // name harus di isi
            'name' => ['required'],
            // string email akan mengecek apakah ini benar-benar email atau tidak
            'email' => ['required', 'unique:users', 'email',],
            // minimal 8 karakter untuk password
            'password' => ['required', 'min:8'],
        ]);


        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            // Hash::make() akan mengenkripsi password
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
}