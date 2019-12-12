<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{

    protected $table = 'administrador';

    protected $fillable = [
        'nome', 'email', 'senha', 'login'
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];

    public function contas()
    {
        return $this->hasMany(Conta::class);
    }

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }

    public function fluxos_diarios()
    {
        return $this->hasMany(FluxoDiario::class);
    }

    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class);
    }

}
