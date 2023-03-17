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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('cars', [
        'heading' => 'Cars',
        'listings' => Car::all()
    ]);
});

Route::get('/cars/{listing}', function(Car $listing ) {
    return view('car', [
        'listing' => $listing
    ]);
});