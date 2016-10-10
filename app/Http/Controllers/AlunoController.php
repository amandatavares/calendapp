<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Aluno as Aluno;
use App\Alu_Disc as Relation;

class AlunoController extends Controller
{
	public function show(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		return response()->json(Aluno::find($req->id));
	}

	// public function create(Request $req)
	// {
	// 	$aluno = new Aluno();
	// 	$aluno->nome = $req->nome;
	// 	$aluno->matricula = $req->matricula;
	// 	$aluno->curso = $req->curso;
	// 	$aluno->semestre = $req->semestre;

	// 	return response()->json($aluno->save());
	// }

	public function update(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		$aluno = Aluno::find($req->id);
		$aluno->nome = $req->nome;
		$aluno->matricula = $req->matricula;
		$aluno->curso = $req->curso;
		$aluno->semestre = $req->semestre;

		return response()->json($aluno->save());
	}

	public function delete(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		return response()->json(Aluno::find($req->id)->delete());
	}

	public function matricDisciplina(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		$relation = new Relation();
		$relation->alunos_id = $req->alunos_id;
		$relation->disciplinas_id = $req->disciplinas_id;

		return response()->json($relation->save());
	}

	public function showDisciplina(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		return response()->json(Relation::with('disciplina','aluno')->find($req->id));
	}
}
