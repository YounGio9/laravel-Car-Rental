<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;

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



Route::get('/', [CarController::class, 'index']);

Route::get('/cars/create', [CarController::class, 'create'])->middleware('auth');

Route::get('/cars/manage', [CarController::class, 'manage'])->middleware('auth');

Route::get('/cars/{listing}', [CarController::class, 'find']);

Route::get('/cars/{listing}/edit', [CarController::class, 'edit'])->middleware('auth');

Route::put('/cars/{listing}', [CarController::class, 'update'])->middleware('auth');

Route::delete('/cars/{listing}', [CarController::class, 'delete'])->middleware('auth');

Route::post('/cars', [CarController::class, 'store'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::get('/rentals', [UserController::class, 'rentals']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'exit']);

Route::post('/rent/{listing}', [CarController::class, 'rent'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

Route::post('/users/auth', [UserController::class, 'auth']);








