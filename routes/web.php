<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/catalog', [HomeController::class, 'catalogView'])->name('catalog');
Route::get('/catalog/{productId}', [HomeController::class, 'productView'])->name('product');

Route::group([
    'middleware' => ['guest'],
    'prefix' => 'auth',
    'as' => 'auth.'
], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login.action');

    Route::get('/register', [AuthController::class, 'registrationView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'registration'])->name('register.action');
});

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::group([
    'middleware' => ['admin'],
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/product/add', [AdminController::class, 'addProduct'])->name('product.create');
    Route::post('/product/store', [AdminController::class, 'storeProduct'])->name('product.store');

    Route::get('/product/edit/{productId}', [AdminController::class, 'editProduct'])->name('product.edit');
    Route::post('/product/update/{productId}', [AdminController::class, 'updateProduct'])->name('product.update');

    Route::get('/admin', [AdminController::class, 'adminView'])->name('admin');
});
