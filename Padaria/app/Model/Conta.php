<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table = 'conta';

    protected $fillable = [
        'banco', 'agencia', 'tipo', 'numero','saldo','administrador_id'
    ];

    public function admin()
    {
        return $this->belongsTo(Administrador::class);
    }

    public function movimentacoes_bancarias()
    {
        return $this->hasMany(MovimentacaoBancaria::class);
    }
}
