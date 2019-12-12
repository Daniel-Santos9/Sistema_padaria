<?php

use Illuminate\Database\Seeder;
use App\Model\Conta;

class ContaSeeder extends Seeder
{
    public function run()
    {
        Conta::create([
        'banco' => 'Banco do Brasil',
        'agencia' => '4718-7',
        'tipo' => 0,
        'numero' => '4781541',
        'saldo' => 1000.00,
        'administrador_id' => 1
        ]);
    }
}