<?php

use Illuminate\Database\Seeder;
use App\Model\Boleto;

class BoletoSeeder extends Seeder
{
    public function run()
    {
        Boleto::create([
            'NF' => 1000,
            'pagamento_id' => 3
        ]);
        Boleto::create([
            'NF' => 1001,
            'pagamento_id' => 4
        ]);
    }
}
