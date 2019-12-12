<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Folga extends Model
{
    protected $table = 'folga';

    protected $fillable = [
        'turno', 'dia','funcionario_id'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
