<?php

use Illuminate\Database\Seeder;
use App\Model\MovimentacaoBancaria;

class MovimentacaoBancariaSeeder extends Seeder
{
    public function run()
    {
        MovimentacaoBancaria::create([
          'tipo' => 0,
          'data' => "2017-04-24",
          'descricao' => "Pagamento do boleto",
          'valor' => 750.00,
          'conta_id' => 1
        ]);

        MovimentacaoBancaria::create([
          'tipo' => 1,
          'data' => "2017-04-24",
          'descricao' => "Deposito",
          'valor' => 1000.00,
          'conta_id' => 1
        ]);

        MovimentacaoBancaria::create([
          'tipo' => 0,
          'data' => "2017-04-24",
          'descricao' => "Pagamento de Cheque",
          'valor' => 850.00,
          'conta_id' => 1
        ]);
    }
}
