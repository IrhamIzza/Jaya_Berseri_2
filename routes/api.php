<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/admin', [AdminController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/article/{id}', [ArticleController::class, 'show']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/admin', function (){  
        return ['data' => 'hanya admin yang bisa lihat ini'];
    })->middleware('isAdmin');
    Route::post('/product-create', [ProductController::class, 'store']);
    Route::get('/article', [ArticleController::class, 'index'])->middleware('isAdmin');
    Route::post('/article/{id}', [ArticleController::class, 'update'])->middleware('isAdmin');
    Route::post('/logout', [AuthController::class, 'logout']);
});
// Route::get('/coba', [AdminController::class, 'index']);