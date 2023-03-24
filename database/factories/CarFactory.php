<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'brand' => $this->faker->firstName(),
            'price' => $this->faker->randomNumber(3, true) * 100,
            'description' => $this->faker->paragraph(5),
            'places' => $this->faker->randomNumber(1, true),
            'kilometrage' => $this->faker->randomNumber(3, true)
            // 'rentalId' => 0
        ];
    }
}
