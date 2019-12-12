<?php

use Illuminate\Database\Seeder;
    use App\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        Users::create([
            'name' => 'ADMIN',
            'password' => bcrypt('ADMIN'),
            'email' => 'expeditoalves2011@live.com'
        ]);
    }
}