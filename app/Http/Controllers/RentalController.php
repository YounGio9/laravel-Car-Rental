<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\User;
use App\Models\Car;

class RentalController extends Controller
{
    //
    public function show(Car $listing)
    {
        return view('listings.rent', [
            'listing' => $listing
        ]);
    }

    public function leave(Car $listing)
    {
        // Rental::find($listing->rental_id)->delete();
        $listing->update([
            'rental_id' => null,
            'user_id' => null
        ]);

        $user = User::where('email', auth()->user()->email)->first();
        if (count($user->cars) == 0) {
            $user->update([
                'rental_id' => null
            ]);
        } else {
            $user->update([
                'rental_id' => $user->cars->first()->rental_id
            ]);
        }



        return redirect('/')->with('message', 'Voiture rendue');
    }
}
