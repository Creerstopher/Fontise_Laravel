<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create()
    {
        return view('pages.');

    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role' => 0,
        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials, true);
        return redirect(route('home'));
    }

    public function edit()
    {
        return view('pages.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials, true))
            return back()->withInput()->withErrors(['email' => 'Неверно указана почта или пароль']);
        return redirect(route('home'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
