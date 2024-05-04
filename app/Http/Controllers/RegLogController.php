<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegLogController extends Controller
{
    public function create()
    {
        return view('pages.register');

    }

    public function store(RegisterRequest $request)
    {
        Product::create([
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

    public function update(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials, true))
            return back()->withInput()->withErrors(['email' => 'Неверно указана почта или пароль']);
        return redirect(route('home'));
    }

    public function destroy()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
