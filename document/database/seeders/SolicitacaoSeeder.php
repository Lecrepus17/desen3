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
            'tipo' => 1, // Substitua pelo tipo desejado.
            'solicitante_fk' => 1, // Substitua pelo ID do docente solicitante.
            'substituto_fk' => 2, // Substitua pelo ID do docente substituto.
            'disciplina_fk' => 1, // Substitua pelo ID da disciplina.
            'disciplina_substituta_fk' => 2, // Substitua pelo ID da disciplina substituta.
            'user_fk' => 3, // Substitua pelo ID do usuário associado.
            'ciclo_fk' => 1, // Substitua pelo ID do ciclo.
            'data_devolucao' => null,
            'etapa' => null,
            'chefia' => null,
            'coordenacao' => null,
            'autorizar' => null,
            'estado' => null,
        ]);
    }
}
