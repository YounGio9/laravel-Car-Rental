<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {  // $rental = \App\Models\Rental::factory()->create();
        // $rental = \App\Models\Rental::factory()->create([
        //     'fin_location' => '1988-07-06 13:58:00'
        // ]);
         $rental = \App\Models\Rental::factory()->create();

         \App\Models\Car::factory(10)->create([
            'rental_id' => $rental->id
         ]);


         \App\Models\User::factory()->create([
            'name' => 'Giovani',
            'email' => 'giovanidesouza999@gmail.com',
            'password' => bcrypt('giovani'),
            'rental_id' => $rental->id,
            'isAdmin' => 1
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
