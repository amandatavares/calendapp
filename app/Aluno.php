<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	public function user()
    {
        return $this->belongsTo('App\User','id');
    }
    public function atividade()
	{
	    return $this->hasMany('App\Atividade');
	}
	public function disciplina()
	{
	    return $this->hasMany('App\Alu_Disc');
	}
}
