<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function criarUsuario(Request $request)
    {
        // Valide os dados recebidos do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:8',
        ]);

        // Crie um novo usuário
        $user = new User();
        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        $user->senha = bcrypt($request->input('senha'));

        $user->save();

        // Redirecione ou retorne uma resposta de sucesso
       // return redirect('/usuarios')->with('success', 'Usuário criado com sucesso!');
    }

}
