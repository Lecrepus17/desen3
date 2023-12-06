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
        Schema::create('docen_ciclos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docente_fk')->constrained(
                table: 'docentes'
            );
            $table->foreignId('ciclo_fk')->constrained(
                table: 'ciclos'
            );
            //$table->integer('nivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docen_ciclos');
    }
};
