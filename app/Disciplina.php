<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function atividade()
	{
	    return $this->hasMany('App\Atividade');
	}

	public function aluno()
	{
	    return $this->hasMany('App\Alu_Disc');
	}
}
