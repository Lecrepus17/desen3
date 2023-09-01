<?php

namespace Database\Seeders;

use App\Models\Ciclo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciclo::create([
            'ano' => '2023',
            'semestre' => 1,
            'inicio' => '2023-01-15',
            'fim' => '2023-06-30',
        ]);

        Ciclo::create([
            'ano' => '2023',
            'semestre' => 2,
            'inicio' => '2023-07-01',
            'fim' => '2023-12-31',
        ]);
    }
}
