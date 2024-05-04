@extends('layouts.app')

@section('title', 'Вход')

@section('content')
    <div class="registraion">
        <div class="container">
            <div class="reg_items">
                <h1>Вход</h1>
                <form action="{{ route('auth.login.action') }}" method="post" name="login">
                    @csrf
                    <input type="email" name="email" placeholder="Почта" value="{{ old('email') }}">
                    @error('email')
                    <div class="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                    <input type="password" name="password" placeholder="Пароль">
                    <input class="submit" type="submit" name="submit" value="Войти">
                </form>
                <h3><a style="color: #FFFFFF" href="/register">Зарегистрироваться</a></h3>
            </div>
        </div>
    </div>
@endsection
