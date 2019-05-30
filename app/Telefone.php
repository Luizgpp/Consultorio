<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }
}
