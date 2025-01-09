<?php

namespace Database\Seeders;

use App\Models\Laboratoire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaboratoireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laboratoire::factory()->count(5)->create();
    }
}
