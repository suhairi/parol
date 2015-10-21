<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Details;
use App\Cawangan;

class UserTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cawangans = Cawangan::all();

        for($day = 15; $day <= 20; $day++)
        {
            if($day < 10)
                $days = '0' . $day;
            else
                $days = $day;

            $tarikh = '2015-10-' . $days;

            foreach($cawangans as $cawangan)
            {
                if($cawangan->id == 1)
                    $count = 16;
                else
                    $count = 14;

                for($kesalahan=1; $kesalahan<=$count; $kesalahan++)
                {

                    // Warganegara
                    for($warga=1; $warga<=3; $warga++)
                    {
                        if($warga == 1)
                        {
                            for($jantina=1; $jantina<=2; $jantina++)
                            {
                                for($bangsa=1; $bangsa<=3; $bangsa++)
                                {
                                    Details::create([
                                        'tarikh' => $tarikh,
                                        'cawangan_id' => $cawangan->id,
                                        'warganegara_id' => $warga,
                                        'bangsa_id' => $bangsa,
                                        'kesalahan_id' => $kesalahan,
                                        'jantina_id' => $jantina,
                                        'jumlah' => rand(0, 30)
                                    ]);
                                }
                            }

                        } else {

                            for($bangsa=4; $bangsa<=4; $bangsa++)
                            {
                                for($jantina=1; $jantina<=2; $jantina++) {
                                    Details::create([
                                        'tarikh' => $tarikh,
                                        'cawangan_id' => $cawangan->id,
                                        'warganegara_id' => $warga,
                                        'bangsa_id' => $bangsa,
                                        'kesalahan_id' => $kesalahan,
                                        'jantina_id' => $jantina,
                                        'jumlah' => rand(0, 123)
                                    ]);
                                }
                            }
                        } // end if else warga

                    } // end warga
                } //end kesalahan
            }
        }

    }



}
