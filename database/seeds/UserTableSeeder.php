<?php


use App\Kategori;
use App\Pegawai;
use App\Warganegara;
use Illuminate\Database\Seeder;
use App\User;
use App\Bangsa;
use App\Jantina;
use App\Cawangan;
use App\Kesalahan;

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
            'name'      => 'admin',
            'email'     => 'admin',
            'password'  => \Hash::make('password')
        ]);



        User::create([
            'name'      => 'Suhairi Abdul Hamid',
            'email'     => 'suhairi81@gmail.com',
            'password'  => \Hash::make('suhairi')
        ]);

        Cawangan::create(['nama' => 'ALOR SETAR']);
        Cawangan::create(['nama' => 'POKOK SENA']);
        Cawangan::create(['nama' => 'SUNGAI PETANI']);

        Warganegara::create(['nama' => 'WARGANEGARA']);
        Warganegara::create(['nama' => 'BUKAN WARGANEGARA']);
        Warganegara::create(['nama' => 'LAIN_LAIN']);

        Jantina::create(['nama' => 'LELAKI']);
        Jantina::create(['nama' => 'PEREMPUAN']);

        Bangsa::create(['nama' => 'MELAYU']);
        Bangsa::create(['nama' => 'CINA']);
        Bangsa::create(['nama' => 'INDIA']);
        Bangsa::create(['nama' => 'LAIN_LAIN']);

        Kategori::create(['nama' => 'SABITAN']);        // ---> 1
        Kategori::create(['nama' => 'BUKAN SABITAN']);  // ---> 2
        Kategori::create(['nama' => 'DADAH']);          // ---> 3
        Kategori::create(['nama' => 'MUDA']);           // ---> 4
        Kategori::create(['nama' => 'PAROL']);          // ---> 5
        Kategori::create(['nama' => 'KEM']);            // ---> 6

//        Kesalahan
//            Banduan Akhir   -> 1
//            B. Seumur Hayar -> 2
//            B. Seumur Hidup -> 3
//            T. Limpah Sultan-> 4
//            H. Lama         -> 5
//            H. Singkat      -> 6 ----> SABITAN
//            T. M. Tinggi    -> 7
//            T. M. Sesyen    -> 8
//            T. M. Rendah    -> 9
//            T. M. Rayuan    -> 10
//            T. M. R. S      -> 11
//            B. Dagang       -> 12 ----> B. SABITAN
//            Dadah           -> 13
//            Muda            -> 14
//            Parol`          -> 15
//            KEM             -> 16

        Kesalahan::create(['nama' => 'BANDUAN AKHIR', 'kategori_id' => '1', 'kod' => 'BA']);
        Kesalahan::create(['nama' => 'BANDUAN SEUMUR HAYAT', 'kategori_id' => '1', 'kod' => 'SH']);
        Kesalahan::create(['nama' => 'BANDUAN SEUMUR HIDUP', 'kategori_id' => '1', 'kod' => 'BSH']);
        Kesalahan::create(['nama' => 'TAHANAN LIMPAH SULTAN', 'kategori_id' => '1', 'kod' => 'TLS']);
        Kesalahan::create(['nama' => 'HUKUMAN LAMA', 'kategori_id' => '1', 'kod' => 'HL']);
        Kesalahan::create(['nama' => 'HUKUMAN SINGKAT', 'kategori_id' => '1', 'kod' => 'HS']);

        Kesalahan::create(['nama' => 'TAHANAN MAHKAMAH TINGGI', 'kategori_id' => '2', 'kod' => 'TMT']);
        Kesalahan::create(['nama' => 'TAHANAN MAHKAMAH SESYEN', 'kategori_id' => '2', 'kod' => 'TMS']);
        Kesalahan::create(['nama' => 'TAHANAN MAHKAMAH RENDAH', 'kategori_id' => '2', 'kod' => 'TMR']);
        Kesalahan::create(['nama' => 'TAHANAN MAHKAMAH RAYUAN', 'kategori_id' => '2', 'kod' => 'TMR']);  //  KIV
        Kesalahan::create(['nama' => 'TAHANAN MAHKAMAH RENDAH SESYEN', 'kategori_id' => '2', 'kod' => 'TMRS']);
        Kesalahan::create(['nama' => 'BANDUAN DAGANG', 'kategori_id' => '2', 'kod' => 'BD']);

        Kesalahan::create(['nama' => 'DADAH', 'kategori_id' => '3', 'kod' => 'DADAH']);
        Kesalahan::create(['nama' => 'PAROL', 'kategori_id' => '4', 'kod' => 'PAROL']);
        Kesalahan::create(['nama' => 'MUDA', 'kategori_id' => '5', 'kod' => 'MUDA']);
        Kesalahan::create(['nama' => 'KEM', 'kategori_id' => '6', 'kod' => 'KEM']);


        Pegawai::create(['nama' => 'NOOR HAZWAN B AB HAMID', 'pangkat' => 'KPL 15883']);


    }
}
