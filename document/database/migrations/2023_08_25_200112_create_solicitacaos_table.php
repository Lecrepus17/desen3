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
        Schema::create('solicitacaos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data');
            $table->string('uploads');
            $table->string('justificativa');
            $table->integer('tipo');
            $table->foreignId('solicitante_fk')->nullable()->constrained(
                table: 'docentes'
            );
            $table->foreignId('substituto_fk')->nullable()->constrained(
                table: 'docentes'
            );
            $table->foreignId('disciplina_fk')->nullable()->constrained(
                table: 'disciplinas'
            );
            $table->foreignId('disciplina_substituta_fk')->nullable()->constrained(
                table: 'disciplinas'
            );
            $table->foreignId('ciclo_fk')->nullable()->constrained(
                table: 'ciclos'
            );
            $table->foreignId('chefia_fk')->nullable()->constrained(
                table: 'chefias'
            );
            $table->foreignId('coordenacao_fk')->nullable()->constrained(
                table: 'coordenacaos'
            );
            $table->foreignId('turma_fk')->nullable()->constrained(
                table: 'turmas'
            );
            $table->dateTime('ciencia_chefia')->nullable();
            $table->dateTime('ciencia_coordenacao')->nullable();
            $table->dateTime('data_devolucao')->nullable();
            $table->boolean('autorizar')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacaos');
    }
};
