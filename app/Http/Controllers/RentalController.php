<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class RentalController extends Controller
{
    //
    public function show(Car $listing) {
        return view('listings.rent', [
            'listing' => $listing
        ]);
    }
}
