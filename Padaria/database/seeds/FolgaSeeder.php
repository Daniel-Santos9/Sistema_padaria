<?php

use Illuminate\Database\Seeder;
use App\Model\Folga;

class FolgaSeeder extends Seeder
{
    public function run()
    {
        Folga::create([
            'dia' => '2017-04-28',
            'turno' => 'M',
            'funcionario_id' => 1
        ]);

        Folga::create([
            'dia' => '2017-04-28',
            'turno' => 'T',
            'funcionario_id' => 2
        ]);

        Folga::create([
            'dia' => '2017-04-28',
            'turno' => 'N',
            'funcionario_id' => 3
        ]);

        Folga::create([
            'dia' => '2017-04-29',
            'turno' => 'M',
            'funcionario_id' => 1
        ]);

        Folga::create([
            'dia' => '2017-04-29',
            'turno' => 'T',
            'funcionario_id' => 2
        ]);

        Folga::create([
            'dia' => '2017-04-29',
            'turno' => 'N',
            'funcionario_id' => 3
        ]);
    }
}