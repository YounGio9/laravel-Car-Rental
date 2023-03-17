<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function () {
    return view('cars', [
        'heading' => 'Cars',
        'listings' => Car::all()
    ]);
});

Route::get('/cars/{id}', function($id) {
    return view('car', [
        'listing' => Car::find($id)
    ]);
});