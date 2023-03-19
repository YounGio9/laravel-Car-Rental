<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CarController::class, 'index']);


Route::post('/cars', [CarController::class, 'store']);

Route::get('/cars/create', [CarController::class, 'create']);



Route::get('/cars/{listing}', [CarController::class, 'find']);