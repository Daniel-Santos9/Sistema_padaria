<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';

    protected $fillable = [
        'nome','administrador_id'
    ];

    public function admin()
    {
        return $this->belongsTo(Administrador::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function folgas()
    {
        return $this->hasMany(Folga::class);
    }
}
