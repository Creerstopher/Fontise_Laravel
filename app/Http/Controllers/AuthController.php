<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registrationView()
    {
        return view('pages.auth.register');
    }

    public function loginView()
    {
        return view('pages.auth.login');
    }

    public function registration(RegisterRequest $request)
    {
        User::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => UserRoleEnum::USER,
        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials, true);
        return redirect(route('home'));
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials, true)) {
            return back()->withInput()->withErrors(['email' => 'Неверно указана почта или пароль']);
        }

        return redirect(route('home'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
