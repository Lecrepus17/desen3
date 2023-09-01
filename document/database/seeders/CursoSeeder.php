<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::create([
            'name' => 'Nome do Curso 1',
        ]);

        Curso::create([
            'name' => 'Nome do Curso 2',
        ]);
    }
}
