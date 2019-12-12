<?php

use Illuminate\Database\Seeder;
use App\Model\Cheque;

class ChequeSeeder extends Seeder
{
    public function run()
    {
        Cheque::create([
            'numero' => 5412,
            'pagamento_id' => 1
        ]);

        Cheque::create([
            'numero' => 5413,
            'pagamento_id' => 2
        ]);
    }

}