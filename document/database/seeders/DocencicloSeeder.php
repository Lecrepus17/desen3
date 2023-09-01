<?php

namespace Database\Seeders;

use App\Models\Docen_ciclo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocencicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docen_ciclo::create([
            'docente_fk' => 1, // Substitua pelo ID do docente associado ao ciclo.
            'ciclo_fk' => 1, // Substitua pelo ID do ciclo associado ao docente.
            'nivel' => 1, // Substitua pelo nível desejado.
        ]);
    }
}
