<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        return view('listings.cars', [
            'heading' => 'Cars',
            'listings' => Car::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    public function find(Car $listing) {
        return view('listings.car', [
            'listing' => $listing
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        Car::create($formFields);

        return redirect('/')->with('message', 'Voiture ajoutée au garage avec succès!');

//         // if($request->hasFile('logo')) {
//         //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
//         // }

//    //     $formFields['user_id'] = auth()->id();

//         Car::create($formFields);

//         return redirect('/')->with('message', 'Listing created successfully!');
    }
}
