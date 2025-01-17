<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'DesignationPro' => fake()->word(),
            'UniteMesurePro' => fake()->randomElement(['ml', 'g']),
            'QteStock' => fake()->randomFloat(2, 100, 1000)
        ];
    }
}
