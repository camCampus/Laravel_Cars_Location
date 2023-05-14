<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    protected $count = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'registration' => fake()->unique()->numberBetween($min = 1000, $max = 9000),
            'kilometer' => fake()->numberBetween($min = 1000, $max = 100000),
            'tax_horses' => fake()->numberBetween($min = 3, $max = 8),
        ];
    }
}
