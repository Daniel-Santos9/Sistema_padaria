<?php

use Illuminate\Database\Seeder;
use App\Model\Funcionario;

class FuncionarioSeeder extends Seeder
{
    public function run()
    {
        Funcionario::create([
            'nome' => 'Joao da Silva',
            'cargo_id' => 1,
            'administrador_id' => 1
        ]);

        Funcionario::create([
            'nome' => 'Pedro Alvares Cabral',
            'cargo_id' => 2,
            'administrador_id' => 1
        ]);

        Funcionario::create([
            'nome' => 'Fatima das Dores',
            'cargo_id' => 3,
            'administrador_id' => 1
        ]);
    }
}