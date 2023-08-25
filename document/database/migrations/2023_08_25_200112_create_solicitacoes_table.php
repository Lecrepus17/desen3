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
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data');
            $table->string('uploads');
            $table->string('justificativa');
            $table->integer('tipo');
            $table->foreignId('solicitante_fk')->constrained(
                table: 'docentes'
            )->nullable();
            $table->foreignId('substituto_fk')->constrained(
                table: 'docentes'
            )->nullable();
            $table->foreignId('disciplina_fk')->constrained(
                table: 'disciplinas'
            )->nullable();
            $table->foreignId('disciplina_substituta_fk')->constrained(
                table: 'disciplinas'
            )->nullable();
            $table->foreignId('user_fk')->constrained(
                table: 'users'
            )->nullable();
            $table->foreignId('ciclo_fk')->constrained(
                table: 'ciclos'
            )->nullable();
            $table->dateTime('data_devolucao')->nullable();
            $table->dateTime('chefia')->nullable();
            $table->dateTime('coordenacao')->nullable();
            $table->boolean('autorizar')->nullable();
            $table->boolean('estado')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacoes');
    }
};
