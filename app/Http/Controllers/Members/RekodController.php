<?php

namespace App\Http\Controllers\Members;

use App\Cawangan;
use App\Details;
use App\Kategori;
use App\Kesalahan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RekodController extends Controller
{
    public function index()
    {
        $bil = 1;
        $statuses = [];
        $data[1] = $data[2] = $data[3] = 0;

        $cawangans = Cawangan::all();

        foreach($cawangans as $cawangan) {
            $details = Details::where('tarikh', 'like', Carbon::now()->format('Y-m-d') . '%')
                ->where('cawangan_id', $cawangan->id)
                ->get();

//            dd($details);

            if ($details->isEmpty())
            {
                array_push($statuses, ['cawangan' => $cawangan->nama, 'status' => 'BELUM DIREKOD']);
            } else {
                array_push($statuses, ['cawangan' => $cawangan->nama, 'status' => 'TELAH DIREKOD']);

                $jumlah = 0;
                foreach($details as $detail)
                    $jumlah += $detail->jumlah;

                $data[$cawangan->id] = $jumlah;
            }

        }


        $yourFirstChart["chart"] = array("type" => "bar");
        $yourFirstChart["title"] = array("text" => "Jumlah Keseluruhan Hari ini");
        $yourFirstChart["xAxis"] = array("categories" => ['Alor Setar', 'Pokok Sena', 'Sungai Petani']);
        $yourFirstChart["yAxis"] = array("title" => array("text" => "Bilangan Banduan / Tahanan"));

        $yourFirstChart["series"] = [
            array("name" => "JUMLAH KESELURUHAN", "data" => [$data[1], $data[2], $data[3]])
        ];

        return View('members.rekod.index', compact('bil', 'cawangans', 'statuses', 'yourFirstChart'));
    }

    public function indexPost()
    {
        // Validation
        $validation = Validator::make(Request::all(),[
            'tarikh'        => 'required',
            'cawangan_id'   => 'required|numeric'
        ]);

        if($validation->fails())
        {
            Session::flash('error', 'Sila pilih pejabat.');
            return Redirect::back();
        }

        // next request

        $bil = 1;

        $tarikh = Request::get('tarikh');
        $cawangan = Cawangan::find(Request::get('cawangan_id'))->nama;
        $cawangan_id = Request::get('cawangan_id');
        $details = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
            ->where('cawangan_id', Request::get('cawangan_id'))
            ->get();

        $datas = [];

        if($cawangan_id == 1)
            $count = 16;
        else
            $count = 14;

        if(!empty($details->toArray()))
        {
            // Kesalahan
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
                                $detail = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
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

                        for($bangsa=4; $bangsa<=4; $bangsa++)
                        {
                            for($jantina=1; $jantina<=2; $jantina++) {

                                $detail = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
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

        return View('members.rekod.display.details',
            compact('bil', 'details', 'tarikh', 'cawangan', 'flag', 'datas'));
    }

    public function detailsPost()
    {
        $tarikh = Request::get('tarikh');
        $cawangan = Request::get('cawangan');

        $cawangan_id = Cawangan::where('nama', $cawangan)->first()->id;

//        dd(Request::get('1_4_1_1'));

        if($cawangan_id == 1)
            $count = 16;
        else
            $count = 14;

//        dd($count);
        // Kesalahan
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
                                'cawangan_id' => $cawangan_id,
                                'warganegara_id' => $warga,
                                'bangsa_id' => $bangsa,
                                'kesalahan_id' => $kesalahan,
                                'jantina_id' => $jantina,
                                'jumlah' => Request::get($warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                            ]);
                        }
                    }

                } else {

                    for($bangsa=4; $bangsa<=4; $bangsa++)
                    {
                        for($jantina=1; $jantina<=2; $jantina++) {
                            Details::create([
                                'tarikh' => $tarikh,
                                'cawangan_id' => $cawangan_id,
                                'warganegara_id' => $warga,
                                'bangsa_id' => $bangsa,
                                'kesalahan_id' => $kesalahan,
                                'jantina_id' => $jantina,
                                'jumlah' => Request::get($warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                            ]);
                        }
                    }
                } // end if else warga

            } // end warga
        } //end kesalahan

        return Redirect::back();
    }

    public function detailsUpdate()
    {
        $tarikh = Request::get('tarikh');
        $cawangan = Request::get('cawangan');

        $cawangan_id = Cawangan::where('nama', $cawangan)->first()->id;

        if($cawangan_id == 1)
            $count = 16;
        else
            $count = 14;

        // Kesalahan
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
                            $details = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
                                ->where('cawangan_id', $cawangan_id)
                                ->where('warganegara_id', $warga)
                                ->where('bangsa_id', $bangsa)
                                ->where('kesalahan_id', $kesalahan)
                                ->where('jantina_id', $jantina)
                                ->update([
                                    'jumlah' => Request::get($warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                                ]);
                        }
                    }

                } else {

                    for($bangsa=4; $bangsa<=4; $bangsa++)
                    {
                        for($jantina=1; $jantina<=2; $jantina++) {

                            $details = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
                                ->where('cawangan_id', $cawangan_id)
                                ->where('warganegara_id', $warga)
                                ->where('bangsa_id', $bangsa)
                                ->where('kesalahan_id', $kesalahan)
                                ->where('jantina_id', $jantina)
                                ->update([
                                    'jumlah' => Request::get($warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                                ]);
                        }
                    }
                } // end if else warga

            } // end warga
        } //end kesalahan

        return Redirect::back();
    }

}


