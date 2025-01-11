<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produits = [
            ['DesignationPro' => 'Essence de Rose', 'UniteMesurePro' => 'ml', 'QteStock' => 1000],
            ['DesignationPro' => 'Huile de Jasmin', 'UniteMesurePro' => 'ml', 'QteStock' => 800],
            ['DesignationPro' => 'Poudre de Vanille', 'UniteMesurePro' => 'g', 'QteStock' => 500],
            ['DesignationPro' => 'Extrait de Lavande', 'UniteMesurePro' => 'ml', 'QteStock' => 1200],
            ['DesignationPro' => 'Musc', 'UniteMesurePro' => 'g', 'QteStock' => 300],
            ['DesignationPro' => 'Essence de Bergamote', 'UniteMesurePro' => 'ml', 'QteStock' => 900],
            ['DesignationPro' => 'Poudre d\'Iris', 'UniteMesurePro' => 'g', 'QteStock' => 400],
            ['DesignationPro' => 'Extrait de Citron', 'UniteMesurePro' => 'ml', 'QteStock' => 1500],
            ['DesignationPro' => 'Ambre Gris', 'UniteMesurePro' => 'g', 'QteStock' => 200],
            ['DesignationPro' => 'Essence de Patchouli', 'UniteMesurePro' => 'ml', 'QteStock' => 700]
        ];

        foreach ($produits as $produit) {
            Produit::create($produit);
        }
    }
}
