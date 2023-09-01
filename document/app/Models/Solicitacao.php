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
        'data_devolucao',
        'etapa',
        'chefia',
        'coordenacao',
        'autorizar',
        'estado',
    ];
}
