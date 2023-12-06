<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    public function solicitacao(Request $request){
        // Valide os campos da requisição
        $request->validate([
            'data' => 'required|date',
            'horario' => 'required|date_format:H:i',
            'justificativa' => 'required|string',
            'tipo' => 'required|in:1,2',
        ]);

        // Recupere o ID do solicitante logado (você precisa configurar a autenticação para isso)
        $solicitanteId = auth()->user()->id;

        $novoRegistro = new Solicitacao();
        $novoRegistro->data = $request->input('data') . ' ' . $request->input('horario');
        $novoRegistro->justificativa = $request->input('justificativa');
        $novoRegistro->tipo = $request->input('tipo');
        $novoRegistro->solicitante_fk = $solicitanteId;
        $novoRegistro->disciplina_fk = $request->input('disciplina_fk');
        $novoRegistro->turma_fk = $request->input('turma_fk');
        // Salve o novo registro no banco de dados
        $novoRegistro->save();

        // Redirecione ou retorne uma resposta de sucesso, por exemplo:
        return redirect()->route('teste')->with('success', 'Registro criado com sucesso!');
    }
    public function getSolicitacoes(){
        $solicitacoes = Solicitacao::where('status', null)->get();
        return view('index', [
            'solicitacoes' => $solicitacoes,
        ]);

    }

    public function solicitado(Request $request) {
        // Valide os campos da requisição
        $request->validate([
            'tipo' => 'required|in:1,2',
            'disciplina_substituta_fk' => 'nullable|exists:disciplinas,id',
            'data_devolucao' => 'required_if:tipo,1|nullable|date',
        ]);

        $registroExistente = Solicitacao::find($request->input('id'));
        $soliId = auth()->user()->id;
        // Verifique o valor do campo 'tipo' e atualize os campos apropriados
        if ($request->input('tipo') == 1) {
            $registroExistente->substituto_fk = $soliId;
            $registroExistente->disciplina_substituta_fk = $request->input('disciplina_substituta_fk');
            $registroExistente->data_subistituto = now(); // Use a data atual ou ajuste conforme necessário
            $registroExistente->data_devolucao = $request->input('data_devolucao');
            $registroExistente->status = 1;
        } elseif ($request->input('tipo') == 2) {
            $registroExistente->substituto_fk = $soliId;
            $registroExistente->data_subistituto = now(); // Use a data atual ou ajuste conforme necessário
            $registroExistente->status = 1;
        }

        // Salve as alterações no registro existente
        $registroExistente->save();

        // Redirecione ou retorne uma resposta de sucesso, por exemplo:
        return redirect()->route('sua.rota.de.sucesso')->with('success', 'Registro atualizado com sucesso!');
    }

    public function chefiaSolicitacao(){
        $solicitacoes = Solicitacao::whereIn('status', [1, 2])->get();
        return view('index', [
            'solicitacoes' => $solicitacoes,
        ]);
    }
    public function coordenacaoSolicitacao(){
        $solicitacoes = Solicitacao::whereIn('status', [1, 2])->get();
        return view('index', [
            'solicitacoes' => $solicitacoes,
        ]);
    }
    public function chefiaSolicitado(Request $request) {
        // Valide os campos da requisição
        $request->validate([
            'tipo' => 'required|in:1,2',

        ]);

        $registroExistente = Solicitacao::find($request->input('id'));
        $registroExistente->chefia_fk = auth()->user()->id;
        $registroExistente->ciencia_chefia = now();
        if ($request->input('autorizar') == 1) {
            $registroExistente->status += 1;
        }elseif($request->input('autorizar') == -1){
            $registroExistente->status = -1;
        }


        // Salve as alterações no registro existente
        $registroExistente->save();

        // Redirecione ou retorne uma resposta de sucesso, por exemplo:
        return redirect()->route('sua.rota.de.sucesso')->with('success', 'Registro atualizado com sucesso!');
    }

    public function coordenacaoSolicitado(Request $request) {
        // Valide os campos da requisição
        $request->validate([
            'tipo' => 'required|in:1,2',
        ]);
        $registroExistente = Solicitacao::find($request->input('id'));
        $registroExistente->ciencia_coordenacao = now();
        $registroExistente->status += 1;
        $registroExistente->coordenacao_fk = auth()->user()->id;
        // Salve as alterações no registro existente
        $registroExistente->save();

        // Redirecione ou retorne uma resposta de sucesso, por exemplo:
        return redirect()->route('sua.rota.de.sucesso')->with('success', 'Registro atualizado com sucesso!');
    }
}
