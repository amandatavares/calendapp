<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Atividade as Atividade;

class AtividadeController extends Controller
{
    public function listAll(Request $req)
	{
		return response()->json(Atividade::where(['alunos_id'=>$req->id])->with('disciplina','aluno')->get());
	}

    public function show(Request $req)
	{
		return response()->json(Atividade::with('disciplina','aluno')->find($req->id));
	}

	public function create(Request $req)
	{
		$atividade = new Atividade();
		$atividade->alunos_id = $req->alunos_id;
		$atividade->disciplinas_id = $req->disciplinas_id;
		$atividade->titulo = $req->titulo;
		$atividade->descricao = $req->descricao;
		$atividade->data = $req->data;

		return response()->json($atividade->save());
	}

	public function update(Request $req)
	{
		$atividade = Atividade::find($req->id);
		$atividade->alunos_id = $req->alunos_id;
		$atividade->disciplinas_id = $req->disciplinas_id;
		$atividade->titulo = $req->titulo;
		$atividade->descricao = $req->descricao;
		$atividade->data = $req->data;

		return response()->json($atividade->save());
	}

	public function delete(Request $req)
	{
		return response()->json(Atividade::find($req->id)->delete());
	}
}
