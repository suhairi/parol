<?php


use App\Kategori;
use App\Pegawai;
use App\Warganegara;
use Illuminate\Database\Seeder;
use App\User;
use App\Bangsa;
use App\Jantina;

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

        Warganegara::create(['nama' => 'WARGANEGARA']);
        Warganegara::create(['nama' => 'BUKAN WARGANEGARA']);

        Jantina::create(['nama' => 'LELAKI']);
        Jantina::create(['nama' => 'PEREMPUAN']);

        Bangsa::create(['nama' => 'MELAYU']);
        Bangsa::create(['nama' => 'CINA']);
        Bangsa::create(['nama' => 'INDIA']);
        Bangsa::create(['nama' => 'LAIN_LAIN']);

        Kategori::create(['nama' => 'SABITAN']);
        Kategori::create(['nama' => 'BUKAN SABITAN']);
        Kategori::create(['nama' => 'TAHANAN']);
        Kategori::create(['nama' => 'DADAH']);
        Kategori::create(['nama' => 'MUDA']);

        Pegawai::create(['nama' => 'NOOR HAZWAN B AB HAMID', 'pangkat' => 'KPL 15883']);


    }
}
