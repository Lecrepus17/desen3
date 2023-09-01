<?php

namespace Database\Seeders;

use App\Models\Doc_di;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doc_di::create([
            'disciplina_fk' => 1, // Substitua pelo ID da disciplina associada.
            'docente_fk' => 1, // Substitua pelo ID do docente associado.
            'turma_fk' => 1, // Substitua pelo ID da turma associada.
            'ciclo_fk' => 1, // Substitua pelo ID do ciclo associado.
        ]);
    }
}
