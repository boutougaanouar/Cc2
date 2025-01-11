<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parfum>
 */
class ParfumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NomPar' => fake()->word(),
            'PrixVente' => fake()->randomFloat(2, 50, 500),
            'DateProduction' => fake()->dateTimeBetween('-1 year', 'now'),
            'DateSortie' => fake()->dateTimeBetween('now', '+6 months'),
            'NumLabo' => Laboratoire::factory(),
        ];
    }
}
