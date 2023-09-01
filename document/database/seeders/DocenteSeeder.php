<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Docente::create([
            'name' => 'Nome do Docente',
            'siape' => 923456, // Substitua pelo número de matrícula desejado.
            'user_fk' => 2, // Substitua pelo ID do usuário associado a este docente.
        ]);
        Docente::create([
            'name' => 'Nome do Docente',
            'siape' => 129456, // Substitua pelo número de matrícula desejado.
            'user_fk' => 3, // Substitua pelo ID do usuário associado a este docente.
        ]);
        Docente::create([
            'name' => 'Nome do Docente',
            'siape' => 123956, // Substitua pelo número de matrícula desejado.
            'user_fk' => 4, // Substitua pelo ID do usuário associado a este docente.
        ]);
        Docente::create([
            'name' => 'Nome do Docente',
            'siape' => 123496, // Substitua pelo número de matrícula desejado.
            'user_fk' => 5, // Substitua pelo ID do usuário associado a este docente.
        ]);
    }
}
