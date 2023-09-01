<?php

namespace Database\Seeders;

use App\Models\Solicitacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solicitacao::create([
            'data' => now(),
            'uploads' => 'nome_do_arquivo.pdf',
            'justificativa' => 'Justificativa da solicitação',
            'tipo' => 1,
            'solicitante_fk' => 1, // Substitua pelo ID do docente solicitante.
            'disciplina_fk' => 1, // Substitua pelo ID da disciplina.
            'ciclo_fk' => 1, // Substitua pelo ID do ciclo.
            'turma_fk' => 1, // Substitua pelo ID da turma.
        ]);

        // Segunda solicitação com IDs diferentes.
        Solicitacao::create([
            'data' => now(),
            'uploads' => 'nome_do_arquivo2.pdf',
            'justificativa' => 'Justificativa da segunda solicitação',
            'tipo' => 2,
            'solicitante_fk' => 2, // Substitua pelo ID do docente solicitante da segunda solicitação.
            'disciplina_fk' => 2, // Substitua pelo ID da disciplina da segunda solicitação.
            'ciclo_fk' => 2, // Substitua pelo ID do ciclo da segunda solicitação.
            'turma_fk' => 1, // Substitua pelo ID da turma da segunda solicitação.
        ]);
    }
}
