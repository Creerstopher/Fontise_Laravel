<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::controller(\App\Http\Controllers\RegLogController::class)->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/login', 'edit')->name('login');
        Route::post('/login', 'login');

        Route::get('/register', 'create');
        Route::post('/register', 'register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/logout', 'logout');
    });
});

Route::middleware('admin')->group(function () {
    Route::get('/item/add', function () {
        return view('pages.item.add');
    })->name('item.add');

    Route::get('/admin', function () {
        return view('pages.admin');
    })->name('admin');

});
