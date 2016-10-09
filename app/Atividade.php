<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    public function disciplina()
    {
        return $this->belongsTo('App\Disciplina','id');
    }
    public function aluno()
    {
        return $this->belongsTo('App\Aluno','alunos_id');
    }    
}
