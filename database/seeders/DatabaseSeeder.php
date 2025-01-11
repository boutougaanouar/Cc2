<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Laboratoire;
use App\Models\Parfum;
use App\Models\Produit;
use App\Models\Composition;
use Database\Seeders\LaboratoireSeeder;
use Database\Seeders\ProduitSeeder;
use Database\Seeders\ParfumSeeder;
use Database\Seeders\CompositionSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LaboratoireSeeder::class,
            ProduitSeeder::class,
            ParfumSeeder::class,
            CompositionSeeder::class,
        ]);
    }
}
