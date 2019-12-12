<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MovimentacaoBancaria extends Model
{
    protected $table = 'movimentacao_bancaria';

    protected $fillable = [
        'tipo','data','descricao','valor','conta_id'
    ];

    public function cheque()
    {
        return $this->hasOne(Cheque::class);
    }

    public function boleto()
    {
        return $this->hasOne(Boleto::class);
    }

    public function conta()
    {
        return $this->belongsTo(Conta::class);
    }
}
