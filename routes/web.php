<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});
Route::get('/pupukNPK', function () {
    return view('produkNPK');
});
Route::get('/pupukDAP', function () {
    return view('produkDAP');
});

Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'ShowLogin'])->name('login');
Route::post('/login', [AuthController::class, 'Login']);
Route::get('admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');

Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');

// route::get('admin', function () {
//     return view('admin');
// })->middleware();

// Route::get('/pupukNPK');