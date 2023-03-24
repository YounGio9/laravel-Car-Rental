<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('listings.cars', [
            'heading' => 'Cars',
            'listings' => Car::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    public function find(Car $listing)
    {
        return view('listings.car', [
            'listing' => $listing
        ]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'places' => 'required|max:1',
            'kilometrage' => 'required|min:2',
            'description' => 'required',
            'picture' => 'required'
        ]);

        if ($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        // $formFields['rental_id'] = 0;

        Car::create($formFields);

        return redirect('/')->with('message', 'Voiture ajoutée au garage avec succès!');
    }


    public function edit(Car $listing)
    {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    public function update(Request $request, Car $listing)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'places' => 'required|max:1',
            'kilometrage' => 'required|min:2',
            'description' => 'required'
        ]);

        if ($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Voiture modifiée avec succès!');
    }

    public function delete(Car $listing)
    {
        $listing->delete();

        return redirect('/')->with('message', 'Voiture supprimée avec succès');
    }

    public function rent(Request $request, Car $listing)
    {
        if (count(User::where('email', auth()->user()->email)->first()->cars) == 3)
            return redirect('/')->with('message', 'Vous ne pouvez plus louer de voiture !');

        $formFields = $request->validate([
            'fin_location' => 'required|date|after:yesterday'
        ]);

        $rental = Rental::create($formFields);

        $user = User::where('email', auth()->user()->email)->first();
        $user->update([
            'rental_id' => $rental->id
        ]);

        $listing->update([
            'rental_id' => $rental->id,
            'user_id' => $user->id
        ]);

        return redirect('/')->with('message', 'Voiture louée !');
    }

    public function manage()
    {
        if (auth()->user()->isAdmin != 1)
            return redirect('/')->with('message', 'Vous n\'etes pas un administrateur');

        return view('listings.manage', [
            'listings' => Car::latest()->filter(request(['search']))->paginate(4),
            'users' => \App\Models\User::where('rental_id', '<>', null)->get()
        ]);
    }
}
