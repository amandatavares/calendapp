<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function aluno()
    {
        return $this->hasOne('App\Aluno');
    }
}
