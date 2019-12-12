<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FluxoDiario extends Model
{
    protected $table = 'fluxo_diario';

    protected $fillable = [
        'cofre', 'dia', 'saldo', 'cartao','rendimento','retirada_dia','retirada_cofre',
        'total_vendas','total_geral','administrador_id'
    ];

    public function admin()
    {
        return $this->belongsTo(Administrador::class);
    }
}
