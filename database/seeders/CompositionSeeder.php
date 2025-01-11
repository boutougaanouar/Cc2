<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Parfum;
use App\Models\Produit;
use App\Models\Composition;

class CompositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parfums = Parfum::all();
        $produits = Produit::all();

        foreach ($parfums as $parfum) {
            // Chaque parfum utilise entre 3 et 5 produits
            $nbProduits = rand(3, 5);
            $produitsAleatoires = $produits->random($nbProduits);

            foreach ($produitsAleatoires as $produit) {
                Composition::create([
                    'CodPar' => $parfum->CodPar,
                    'CodPro' => $produit->CodPro,
                    'QuantiteUtilisee' => rand(10, 100) / 10 // Génère un nombre entre 1.0 et 10.0
                ]);
            }
        }
    }
}
