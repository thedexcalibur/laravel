<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register', [
            'title' => 'Buat Akun',
            'active' => 'Buat Akun'
        ]);
    }
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate(
            [
                'nama' => ['required', 'max:55'],
                'alamat' => ['required', 'max:30'],
                'nohp' => ['required', 'min:3', 'max:15', 'unique:users'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required', 'min:5', 'max:20'],
            ]
        );

        $validatedData['level'] = 0;
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Akun berhasil dibuat! Silahkan Login.');
    }
}
