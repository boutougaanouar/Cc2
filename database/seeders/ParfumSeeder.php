<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laboratoire;
use App\Models\Parfum;

class ParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parfums = [
            ['NomPar' => 'Rose Élégante', 'PrixVente' => 199.99],
            ['NomPar' => 'Jasmin de Nuit', 'PrixVente' => 149.99],
            ['NomPar' => 'Vanille Exquise', 'PrixVente' => 179.99],
            ['NomPar' => 'Lavande Provençale', 'PrixVente' => 129.99],
            ['NomPar' => 'Musc Oriental', 'PrixVente' => 249.99],
            ['NomPar' => 'Bergamote Fraîche', 'PrixVente' => 159.99],
            ['NomPar' => 'Iris Poudré', 'PrixVente' => 189.99],
            ['NomPar' => 'Citron d\'Été', 'PrixVente' => 139.99],
            ['NomPar' => 'Ambre Mystique', 'PrixVente' => 299.99],
            ['NomPar' => 'Patchouli Intense', 'PrixVente' => 219.99]
        ];

        $laboratoires = Laboratoire::all();
        
        foreach ($parfums as $parfum) {
            Parfum::create([
                'NomPar' => $parfum['NomPar'],
                'PrixVente' => $parfum['PrixVente'],
                'DateProduction' => now()->subDays(rand(1, 30)),
                'DateSortie' => now()->addDays(rand(30, 90)),
                'NumLabo' => $laboratoires->random()->NumLabo
            ]);
        }
    }
}
