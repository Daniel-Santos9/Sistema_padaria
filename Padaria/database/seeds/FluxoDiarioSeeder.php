<?php

use Illuminate\Database\Seeder;
use App\Model\FluxoDiario;

class FluxoDiarioSeeder extends Seeder
{
    public function run()
    {
        FluxoDiario::create([
            'cofre' => 14000.00,
            'dia' => '2017-04-29',
            'saldo' => 21500.00,
            'cartao' => 2000.00,
            'rendimento' => 7500.00,
            'retirada_dia' => 500.00,
            'retirada_cofre' => 1000.00,
            'total_vendas' => 8000.00,
            'total_geral' => 10000.00,
            'administrador_id' => 1
        ]);

        FluxoDiario::create([
            'cofre' => 13000.00,
            'dia' => '2017-04-30',
            'saldo' => 16400.00,
            'cartao' => 500.00,
            'rendimento' => 3400.00,
            'retirada_dia' => 100.00,
            'retirada_cofre' => 0.00,
            'total_vendas' => 3500.00,
            'total_geral' => 4000.00,
            'administrador_id' => 1
        ]);
    }
}