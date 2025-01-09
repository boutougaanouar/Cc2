<?php

namespace Database\Seeders;
use App\Models\Parfum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parfum::factory()->count(10)->create();
    }
}
