<?php

namespace Database\Seeders;

use App\Models\Coordenacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoordenacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coordenacao::create([
            'inicio' => '2023-01-01',
            'fim' => '2023-12-31',
            'docente_fk' => 1, // Substitua pelo ID do docente associado à coordenação.
            'curso_fk' => 1, // Substitua pelo ID do curso associado à coordenação.
        ]);
    }
}
