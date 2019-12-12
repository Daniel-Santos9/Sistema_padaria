<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    protected $table = 'boleto';

    protected $fillable = [
        'NF', 'pagamento_id'
    ];

    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class);
    }

    public function movimentacao_bancaria()
    {
        return $this->belongsTo(MovimentacaoBancaria::class);
    }
}
