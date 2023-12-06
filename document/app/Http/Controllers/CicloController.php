<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Docente;
use App\Models\Docen_ciclo;
use App\Models\Doc_di;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CicloController extends Controller
{


    public function ciclo(Request $request){

        $ciclo = new Ciclo;
        $ciclo->ano = $request->input('ano');
        $ciclo->semestre = $request->input('semestre');
        $ciclo->inicio = $request->input('inicio');
        $ciclo->fim = $request->input('fim');


        $ciclo->save();

        return redirect('/ciclo')->with('success', 'Ciclo inserido com sucesso.');
    }

    public function showCiclo(){
        $ciclo = Ciclo::all();

        return $ciclo;
    }

    public function createDocen_ciclo(Ciclo $ciclo, Docente $docente){

        if($docente->ciclo->id){
            return redirect('/docCiclo')->with('error', 'Docente já está nesse ciclo.');
        };

        Docen_ciclo::create([
            'docente_fk' => $docente->id,
            'ciclo_fk' => $ciclo->id,
        ]);

        return redirect('/docCiclo')->with('success', 'Docente foi inserido nesse ciclo.');
    }



    public function createOferta(){



        Doc_di::Create([
            'disciplina_fk',
            'docente_fk',
            'turma_fk',
            'ciclo_fk',
        ]);
    }

    public function showOferta(){
        $oferta = Doc_di::all();

        return $oferta;
    }
}
