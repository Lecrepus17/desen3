<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DocenteSeeder::class); // Chama a seeder para a tabela 'docentes'.
        $this->call(DisciplinaSeeder::class); // Chama a seeder para a tabela 'disciplinas'.
        $this->call(CursoSeeder::class); // Chama a seeder para a tabela 'cursos'.
        $this->call(TurmaSeeder::class); // Chama a seeder para a tabela 'turmas'.
        $this->call(CicloSeeder::class); // Chama a seeder para a tabela 'ciclos'.
        $this->call(DocdiSeeder::class); // Chama a seeder para a tabela 'doc_dis'.
        $this->call(ChefiaSeeder::class); // Chama a seeder para a tabela 'chefias'.
        $this->call(CoordenacaoSeeder::class); // Chama a seeder para a tabela 'coordenacaos'.
        $this->call(DocencicloSeeder::class); // Chama a seeder para a tabela 'docen_ciclos'.
        $this->call(SolicitacaoSeeder::class);
    }
}
