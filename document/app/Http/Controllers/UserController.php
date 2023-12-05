<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Docente;
use App\Models\Chefia;
use App\Models\Coordenacao;




class UserController extends Controller
{
    public function criarUsuario(Request $request)
    {
        // validando os dados recebidos do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:8',
        ]);

        // criando um novo usuário
        $user = new User();
        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        $user->senha = bcrypt($request->input('senha'));

        $user->save();


        $request->validate([
            'siape' => 'required|integer|unique:docentes,siape',
        ]);

        // Criando docente
        $docente = new Docente();
        $docente->siape = $request->input('siape');

        $docente->save();

        // Redirecione ou retorne uma resposta de sucesso
        return redirect('/usuarios')->with('success', 'Usuário criado com sucesso!');
    }


    public function promoverParaChefia(User $user)
    {
        // Verifica se o usuário já é chefe
        if ($user->chefia) {
            return redirect('/usuarios')->with('error', 'O usuário já é chefe.');
        }

        // Cria um registro na tabela de chefias associado ao usuário
        Chefia::create([
            'inicio' => now(),
            'fim' => null, // não sei oq colocar no lugar do null
            'docente_fk' => $user->docente->id,
        ]);

        return redirect('/usuarios')->with('success', 'Usuário promovido a chefe com sucesso.');
    }

    public function promoverParaCoordenacao(User $user, $cursoId)
    {
        // Verifica se o usuário já é coordenador no curso específico
        if ($user->coordenacoes()->where('curso_fk', $cursoId)->exists()) {
            return redirect('/usuarios')->with('error', 'O usuário já é coordenador neste curso.');
        }

        // Cria um registro na tabela de coordenacoes associado ao usuário e curso
        Coordenacao::create([
            'inicio' => now(),
            'fim' => null, // não sei se é null
            'docente_fk' => $user->docente->id,
            'curso_fk' => $cursoId,
        ]);

        return redirect('/usuarios')->with('success', 'Usuário promovido a coordenador com sucesso.');
    }
}


