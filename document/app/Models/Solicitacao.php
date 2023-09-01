<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'uploads',
        'justificativa',
        'tipo',
        'solicitante_fk',
        'substituto_fk',
        'disciplina_fk',
        'disciplina_substituta_fk',
        'user_fk',
        'ciclo_fk',
        'chefia_fk',
        'coordenacao_fk',
        'turma_fk',
        'ciencia_chefia',
        'ciencia_coordenacao',
        'data_devolucao',
        'autorizar',
        'status',
    ];
}
