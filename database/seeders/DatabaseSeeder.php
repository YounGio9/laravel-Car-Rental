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
       

         


         $user = \App\Models\User::factory()->create([
            'name' => 'Giovani',
            'email' => 'giovanidesouza999@gmail.com',
            'password' => bcrypt('giovani'),
            'isAdmin' => 1
         ]);

         \App\Models\Car::factory(5)->create();
         \App\Models\Car::factory(5)->create([
            'user_id' => $user->id
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
