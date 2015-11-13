<?php

namespace App\Http\Controllers\Members;

use App\Cawangan;
use App\Details;
use Requesst;
use App\Http\Controllers\Controller;

class CetakController extends Controller
{
    public function index($cawangan, $tarikh)
    {

        $cawangan_id = Cawangan::where('nama', $cawangan)->first();
        $cawangan_id = $cawangan_id->id;

        if (Request::get('cawangan_id') == 4)
            return Redirect::route('members.rekod.parol.cetak', ['tarikh' => Request::get('tarikh')]);

        $details = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan_id)
            ->get();

        $datas = [];

        if ($cawangan_id == 1 || $cawangan_id == 2)
            $count = 16;
        else
            $count = 14;

        if (!empty($details->toArray())) {
            // Kesalahan
            for ($kesalahan = 1; $kesalahan <= $count; $kesalahan++) {
                // Warganegara
                for ($warga = 1; $warga <= 3; $warga++) {
                    if ($warga == 1) {
                        for ($jantina = 1; $jantina <= 2; $jantina++) {
                            for ($bangsa = 1; $bangsa <= 3; $bangsa++) {
                                $detail = Details::where('tarikh', 'like', $tarikh . '%')
                                    ->where('cawangan_id', $cawangan_id)
                                    ->where('warganegara_id', $warga)
                                    ->where('bangsa_id', $bangsa)
                                    ->where('kesalahan_id', $kesalahan)
                                    ->where('jantina_id', $jantina)
                                    ->first();

                                array_push($datas, [
                                    $warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina => $detail->jumlah
                                ]);
                            }
                        }

                    } else {

                        for ($bangsa = 4; $bangsa <= 4; $bangsa++) {
                            for ($jantina = 1; $jantina <= 2; $jantina++) {

                                $detail = Details::where('tarikh', 'like', $tarikh . '%')
                                    ->where('cawangan_id', $cawangan_id)
                                    ->where('warganegara_id', $warga)
                                    ->where('bangsa_id', $bangsa)
                                    ->where('kesalahan_id', $kesalahan)
                                    ->where('jantina_id', $jantina)
                                    ->first();

                                array_push($datas, [
                                    $warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina => $detail->jumlah
                                ]);
                            }
                        }
                    } // end if else warga

                } // end warga
            } //end kesalahan
        }

        return View('members.rekod.cetak.index', compact('cawangan', 'tarikh', 'datas'));
    }

    public function parol($cawangan, $tarikh)
    {
        $cawangan_id = Cawangan::where('nama', $cawangan)->first();
        $cawangan_id = $cawangan_id->id;

        $flag = false;

        $details = Details::where('cawangan_id', $cawangan_id)
            ->where('tarikh', 'like', $tarikh . '%')
            ->get();

        $datas = [];

        if(!($details->isEmpty()))
        {
            $flag = true;

            for($kesalahan = 17; $kesalahan <= 23; $kesalahan++)
            {
                for($bangsa = 1; $bangsa <= 3; $bangsa++)
                {
                    for($jantina = 1; $jantina <= 2; $jantina++)
                    {
                        $detail = Details::where('tarikh', 'like', $tarikh . '%')
                            ->where('cawangan_id', 4)
                            ->where('warganegara_id', 1)
                            ->where('bangsa_id', $bangsa)
                            ->where('kesalahan_id', $kesalahan)
                            ->where('jantina_id', $jantina)
                            ->first();

                        array_push($datas, [
                            '1_' . $bangsa . '_' . $kesalahan . '_' . $jantina => $detail->jumlah
                        ]);
                    }
                }
            }
        }
        return View('members.rekod.cetak.details_parol_cetak', compact('tarikh', 'cawangan', 'flag', 'datas'));
    }

}
