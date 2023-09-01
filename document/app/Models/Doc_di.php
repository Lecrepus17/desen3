<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_di extends Model
{
    use HasFactory;
    protected $fillable = [
        'disciplina_fk',
        'docente_fk',
        'turma_fk',
        'ciclo_fk',
    ];
}
