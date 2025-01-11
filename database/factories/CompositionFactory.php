<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
            'CodPar' => \App\Models\Parfum::factory(),
            'CodPro' => \App\Models\Produit::factory(),
            'QuantiteUtilisee' => fake()->randomFloat(2, 1, 100)
        ];
    }
}
