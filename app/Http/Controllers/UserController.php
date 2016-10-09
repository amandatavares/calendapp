<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;
use App\Aluno as Aluno;

class UserController extends Controller
{
	public function show(Request $req)
	{
		return response()->json(User::with('aluno')->find($req->id));
	}    

	public function create(Request $req)
	{
		$aluno = new Aluno();
		$aluno->nome = $req->nome;
		$aluno->matricula = $req->matricula;
		$aluno->curso = $req->curso;
		$aluno->semestre = $req->semestre;

		$aluno->save();

		// $alun_id = $aluno->id;		

		$user = new User();
		$user->alunos_id = $aluno->id;
		$user->password = $req->password;
			
		return response()->json($user->save());
	}	

	public function update(Request $req)
	{
		$user = User::find($req->id);		
		$user->password = $req->password;

		return response()->json($user->save());
	}

	public function delete(Request $req) 
	{
		return response()->json(User::find($req->id)->delete());
	}

}

