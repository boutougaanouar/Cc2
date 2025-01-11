<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laboratoire;

class LaboratoireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = ['Paris', 'Lyon', 'Marseille', 'Bordeaux', 'Toulouse'];
        
        foreach ($villes as $ville) {
            Laboratoire::create([
                'DesignationLabo' => 'Laboratoire ' . fake()->company(),
                'ville' => $ville
            ]);
        }
    }
}
