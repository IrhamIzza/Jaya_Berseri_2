<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'ShowLogin'])->name('login');
Route::post('/login', [AuthController::class, 'Login']);


Route::get('admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');

Route::get('/pupukNPK', [ArticleController::class, 'pupukNPK']);
Route::get('/pupukDAP', [ArticleController::class, 'pupukDAP']);
Route::get('article/edit/{id}', [ArticleController::class, 'edit'])->middleware('auth')->name('article.edit');
Route::put('article/{id}', [ArticleController::class, 'update'])->middleware('auth')->name('article.update');

// Route::middleware(['auth', 'api'])
//     ->prefix('api')
//     ->group(function () {
//         Route::get('admin', [AdminController::class, 'index'])->name('admin');
//     });

Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');

// route::get('admin', function () {
//     return view('admin');
// })->middleware();

// Route::get('/pupukNPK');