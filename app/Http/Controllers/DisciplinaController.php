<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Disciplina as Disciplina;

class DisciplinaController extends Controller
{
	public function listAll()
	{
		header("Access-Control-Allow-Origin: *");
		return response()->json(Disciplina::all());
	}

    public function show(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		return response()->json(Disciplina::find($req->id));
	}

	public function create(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		$disciplina = new Disciplina();
		$disciplina->nome = $req->nome;
		$disciplina->professor = $req->professor;

		return response()->json($disciplina->save());
	}

	public function update(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		$disciplina = Disciplina::find($req->id);
		$disciplina->nome = $req->nome;
		$disciplina->professor = $req->professor;

		return response()->json($disciplina->save());
	}

	public function delete(Request $req)
	{
		header("Access-Control-Allow-Origin: *");
		return response()->json(Disciplina::find($req->id)->delete());
	}

}
