<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    protected $table = 'cheque';

    protected $fillable = [
        'numero', 'pagamento_id'
    ];

    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class);
    }

    public function movimentacao_bancaria(){
        return $this->belongsTo(MovimentacaoBancaria::class);
    }
}
