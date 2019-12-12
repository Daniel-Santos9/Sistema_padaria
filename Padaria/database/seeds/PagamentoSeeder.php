<?php

use Illuminate\Database\Seeder;
use App\Model\Pagamento;

class PagamentoSeeder extends Seeder
{
    public function run()
    {
        Pagamento::create([
            'descricao' => 'Cheque para fulano de tal',
            'vencimento' => "2017-04-30",
            'valor' => 700.00,
            'administrador_id' => 1
        ]);

        Pagamento::create([
            'descricao' => 'Cheque para beltrano',
            'vencimento' => "2017-05-01",
            'valor' => 800.00,
            'administrador_id' => 1
        ]);

        Pagamento::create([
            'descricao' => 'Boleto para ciclano',
            'vencimento' => "2017-05-01",
            'valor' => 600.00,
            'administrador_id' => 1
        ]);

        Pagamento::create([
            'descricao' => 'Boleto para fulano',
            'vencimento' => "2017-05-01",
            'valor' => 300.00,
            'administrador_id' => 1
        ]);
    }
}
