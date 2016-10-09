<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Disciplina as Disciplina;

class DisciplinaController extends Controller
{
	public function listAll()
	{
		return response()->json(Disciplina::all());
	}

    public function show(Request $req)
	{
		return response()->json(Disciplina::find($req->id));
	}    

	public function create(Request $req)
	{
		$disciplina = new Disciplina();
		$disciplina->nome = $req->nome;
		$disciplina->professor = $req->professor;		
		
		return response()->json($disciplina->save());
	}

	public function update(Request $req)
	{
		$disciplina = Disciplina::find($req->id);
		$disciplina->nome = $req->nome;
		$disciplina->professor = $req->professor;	
		
		return response()->json($disciplina->save());
	}

	public function delete(Request $req) 
	{
		return response()->json(Disciplina::find($req->id)->delete());
	}

}
