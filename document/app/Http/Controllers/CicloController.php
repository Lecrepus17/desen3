<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Docente;
use App\Models\Docen_ciclo;
use App\Models\Turma;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    public function showDocente(){
       $docente = Docente::all();

       return $docente;
    }

    public function createDocente(){

    }

    public function showCurso(){
        $curso = Curso::all();

        return $curso;
    }


    public function getCurso(string $id){
        $curso = Curso::findOrFail($id);

        return $curso;
    }

    public function showDisciplina(){
        $disciplina = Disciplina::all();

        return $disciplina;
    }

    public function getDisciplina(string $id){
        $disciplina = Disciplina::findOrFail($id);

        return $disciplina;
    }

    public function showTurma(){
        $turma = Turma::all();

        return $turma;
    }

    public function showCiclo(){
        $ciclo = Ciclo::all();

        return $ciclo;
    }

    public function showDocen_ciclo(){
        $docCiclo = Docen_ciclo::all();

        return $docCiclo;
    }
}
