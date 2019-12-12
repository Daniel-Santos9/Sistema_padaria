<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamento';

    protected $fillable = [
        'descricao','vencimento','valor','administrador_id'
    ];

    public function cheque()
    {
        return $this->hasOne(Cheque::class);
    }

    public function boleto()
    {
        return $this->hasOne(Boleto::class);
    }

    public function admin()
    {
        return $this->belongsTo(Administrador::class);
    }
 }
