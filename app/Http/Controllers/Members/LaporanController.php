<?php

//namespace app\Http\Controllers\Members;
namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Profile;
use App\Keluarmasuk;
use Carbon\Carbon;

class LaporanController extends Controller
{

    public function alorsetar() {

        $year = Carbon::now()->format('Y');
        $data = [];
        $cawangan = 1;

        for($i = 1; $i <= 9; $i++)
        {


            for ($j = 1; $j <= 12; $j++) {

                $month = $j;

                if($month < 10)
                    $month = '0' . $j;

                $detail = Keluarmasuk::where('tarikh', 'like', $year . '-' . $month . '-%')
                    ->where('cawangan_id', 1)
                    ->where('kesalahan', $i)
                    ->sum('jumlah');

                array_push($data, [$i . '_' . $j => $detail]);
            }
        }

        $jumlah = 1;

//        dd($data);

        return View('members.laporan.alorsetar', compact('data', 'jumlah', 'cawangan', 'year'));
    }

    public function pokoksena() {

        $year = Carbon::now()->format('Y');
        $data = [];
        $cawangan = 2;

        for($i = 1; $i <= 9; $i++)
        {

            for ($j = 1; $j <= 12; $j++) {

                $month = $j;

                if($month < 10)
                    $month = '0' . $j;

                $detail = Keluarmasuk::where('tarikh', 'like', $year . '-' . $month . '-%')
                    ->where('cawangan_id', 2)
                    ->where('kesalahan', $i)
                    ->sum('jumlah');

                array_push($data, [$i . '_' . $j => $detail]);
            }
        }

        $jumlah = 1;

//        dd($data);

        return View('members.laporan.pokoksena', compact('data', 'jumlah', 'cawangan', 'year'));
    }

    public function sungaipetani() {

        $year = Carbon::now()->format('Y');
        $data = [];
        $cawangan = 3;

        for($i = 1; $i <= 9; $i++)
        {

            for ($j = 1; $j <= 12; $j++) {

                $month = $j;

                if($month < 10)
                    $month = '0' . $j;
                
                $detail = Keluarmasuk::where('tarikh', 'like', $year . '-' . $month . '-%')
                    ->where('cawangan_id', 3)
                    ->where('kesalahan', $i)
                    ->sum('jumlah');

                array_push($data, [$i . '_' . $j => $detail]);
            }
        }

        $jumlah = 1;

//        dd($data);

        return View('members.laporan.sungaipetani', compact('data', 'jumlah', 'cawangan', 'year'));
    }



}