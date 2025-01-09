<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Laboratoire;


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

            'NomPar' => $this->faker->word,

            'PrixVente' => $this->faker->randomFloat(2, 10, 100),

            'DateProduction' => $this->faker->date,

            'DateSortie' => $this->faker->date,

            'laboratoire_id' => Laboratoire::factory(),

        ];
    }
}
