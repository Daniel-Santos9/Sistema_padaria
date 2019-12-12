<?php

use Illuminate\Database\Seeder;
use App\Model\Cargo;

class CargoSeeder extends Seeder
{
    public function run()
    {
        Cargo::create([
            'nome' => 'Padeiro(a)',
            'sal' => 700.00,
        ]);

        Cargo::create([
            'nome' => 'Atendente',
            'sal' => 780.00,
        ]);

        Cargo::create([
            'nome' => 'Secretario(a)',
            'sal' => 800.00,
        ]);
    }
}