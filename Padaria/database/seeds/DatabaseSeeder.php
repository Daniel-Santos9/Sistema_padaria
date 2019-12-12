<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(AdministradorSeeder::class);
        $this->call(CargoSeeder::class);
    }
}
