<?php

namespace Database\Seeders;

use App\Models\Turma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Turma::create([
            'name' => 'Nome da Turma 1',
            'curso_fk' => 1, // Substitua pelo ID do curso associado a esta turma.
        ]);

        Turma::create([
            'name' => 'Nome da Turma 2',
            'curso_fk' => 2, // Substitua pelo ID do curso associado a esta turma.
        ]);
    }
}
