<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Produit;
use App\Models\Parfum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Composition>
 */
class CompositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'parfum_id' => Parfum::factory(),

            'produit_id' => Produit::factory(),

            'QuantiteUtilisee' => $this->faker->numberBetween(1, 100),

        ];
    }
}
