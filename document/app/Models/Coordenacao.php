<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'inicio',
        'fim',
        'docente_fk',
        'curso_fk',
    ];

}
