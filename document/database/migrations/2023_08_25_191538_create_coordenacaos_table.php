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
        Schema::create('coordenacaos', function (Blueprint $table) {
            $table->id();
            $table->date('inicio');
            $table->date('fim');
            $table->foreignId('docente_fk')->constrained(
                table: 'docentes'
            );
            $table->foreignId('curso_fk')->constrained(
                table: 'cursos'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordenacaos');
    }
};
