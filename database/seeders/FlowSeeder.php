<?php

namespace Database\Seeders;

use App\Models\Flow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flow::factory()
            ->count(100) // Defina o número de registros que deseja criar
            ->create();
    }
}
