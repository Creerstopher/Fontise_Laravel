@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="registraion">
        <div class="container">
            <div class="reg_items">
                <h1>Регистрация</h1>
                <form action="/register" method="post" name="reg">
                    @csrf
                    <input type="text" name="fname" placeholder="Имя" value="{{ old('fname') }}">
                    @error('fname')
                    <div class="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                    <input type="text" name="lname" placeholder="Фамилия" value="{{ old('lname') }}">
                    @error('lname')
                    <div class="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                    <input type="email" name="email" placeholder="Почта" value="{{ old('email') }}">
                    @error('email')
                    <div class="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                    <input type="password" name="password" placeholder="Пароль">
                    @error('password')
                    <div class="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                    <input type="password" name="password_confirmation" placeholder="Повторите пароль">
                    @error('password_confirmation')
                    <div class="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                    <input class="submit" type="submit" name="submit" value="Зарегистрироваться">
                </form>
                <h3><a style="color: #FFFFFF" href="/login">Войти</a></h3>
            </div>
        </div>
    </div>
@endsection
