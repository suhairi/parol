<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Mohd Najib b Ruslah',
            'email'     => 'najib@gmail.com',
            'password'  => \Hash::make('najib')
        ]);

        User::create([
            'name'      => 'Suhairi Abdul Hamid',
            'email'     => 'suhairi81@gmail.com',
            'password'  => \Hash::make('suhairi')
        ]);
    }
}
