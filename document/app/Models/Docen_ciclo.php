<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docen_ciclo extends Model
{
    use HasFactory;
    protected $fillable = [
        'docente_fk',
        'ciclo_fk',
        'nivel',
    ];
}
