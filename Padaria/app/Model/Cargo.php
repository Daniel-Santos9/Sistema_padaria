<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';

    protected $fillable = [
        'nome', 'sal'
    ];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }

}
