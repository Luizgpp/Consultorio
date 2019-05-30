<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "cargos";

    public function colaboradores()
    {
        return $this->hasMany(Colaborador::class);
    }
}
