<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doc_dis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disciplina_fk')->constrained(
                table: 'disciplinas'
            );
            $table->foreignId('docente_fk')->constrained(
                table: 'docentes'
            );
            $table->foreignId('turma_fk')->constrained(
                table: 'turmas'
            );
            $table->foreignId('ciclo_fk')->constrained(
                table: 'ciclos'
            );
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_dis');
    }
};
