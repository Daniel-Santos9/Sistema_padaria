<?php

use Illuminate\Database\Seeder;
use App\Model\Administrador;

class AdministradorSeeder extends Seeder
{
    public function run()
    {
        Administrador::create([
            'nome' => 'ADMIN',
            'senha' => bcrypt('ADMIN'),
            'email' => 'daniel.ifce2@gmail.com',
            'users_id' => 1
        ]);
    }
}