<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = "colaboradores";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function telefones()
    {
        return $this->hasMany(Telefone::class, 'colaboradores_id');
    }
}
