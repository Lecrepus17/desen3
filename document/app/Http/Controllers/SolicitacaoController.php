<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    public function create(Request $request){
    // Valide os campos da requisição
    $request->validate([
        'data' => 'required|date',
        'horario' => 'required|date_format:H:i',
        'uploads' => 'required|string',
        'justificativa' => 'required|string',
        'tipo' => 'required|in:1,2',
    ]);

    // Recupere o ID do solicitante logado (você precisa configurar a autenticação para isso)
    $solicitanteId = auth()->user()->id;

    // Crie uma nova instância do seu modelo e preencha os campos
    $novoRegistro = new Solicitacao(); // Substitua 'SeuModelo' pelo nome do seu modelo
    $novoRegistro->data = $request->input('data') . ' ' . $request->input('horario');
    $novoRegistro->uploads = $request->input('uploads');
    $novoRegistro->justificativa = $request->input('justificativa');
    $novoRegistro->tipo = $request->input('tipo');
    $novoRegistro->solicitante_fk = $solicitanteId;
    $novoRegistro->disciplina_fk = $request->input('disciplina_fk');
    $novoRegistro->turma_fk = $request->input('turma_fk');

    // Salve o novo registro no banco de dados
    $novoRegistro->save();

    // Redirecione ou retorne uma resposta de sucesso, por exemplo:
    return redirect()->route('sua.rota.de.sucesso')->with('success', 'Registro criado com sucesso!');
    }
}
