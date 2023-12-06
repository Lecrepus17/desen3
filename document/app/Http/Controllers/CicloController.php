<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Docente;
use App\Models\Docen_ciclo;
use App\Models\Doc_di;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CicloController extends Controller
{


    public function showTurma(){
        $turma = Turma::all();

        return $turma;
    }

    public function createCiclo(Request $request){

        $ciclo = new Ciclo;
        $ciclo->ano = $request->input('ano');
        $ciclo->semestre = $request->input('semestre');
        $ciclo->inicio = $request->input('inicio');
        $ciclo->fim = $request->input('fim');

        $ciclo->save();

        return redirect('/ciclo')->with('success', 'Ciclo inserido com sucesso.');
    }

    public function createDocen_ciclo(Ciclo $ciclo, Docente $docente){

        if($docente->ciclo){
            return redirect('/docCiclo')->with('error', 'Docente já está nesse ciclo.');
        };

        Docen_ciclo::create([
            'docente_fk' => $docente->id,
            'ciclo_fk' => $ciclo->id
        ]);

        return redirect('/docCiclo')->with('success', 'Docente foi inserido nesse ciclo.');
    }

    public function showOferta(){
        $oferta = Doc_di::all();

        return $oferta;
    }
}
