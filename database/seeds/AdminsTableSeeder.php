<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Thales Serra',
            'email' => 'thales@imaxinformatica.com.br',
            'password' => bcrypt('Thales100%')
        ]);
        User::create([
            'name' => 'Igor Nascimento',
            'email' => 'igor@imaxinformatica.com.br',
            'password' => bcrypt('.Welcome09')
        ]);
        User::create([
            'name' => 'Lucas Borelli',
            'email' => 'lucas@imaxinformatica.com.br',
            'password' => bcrypt('.Welcome09')
        ]);
    }
}
