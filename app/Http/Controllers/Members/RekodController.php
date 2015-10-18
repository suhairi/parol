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

        $cawangans = Cawangan::all();

        foreach($cawangans as $cawangan)
        {
            $details = Details::where('tarikh', 'like', Carbon::now()->format('Y-m-d') . '%')
                ->where('cawangan_id', $cawangan->id)
                ->get();

            if($details->isEmpty())
                array_push($statuses, ['cawangan' => $cawangan->nama, 'status' => 'BELUM DIREKOD']);
            else
                array_push($statuses, ['cawangan' => $cawangan->nama, 'status' => 'DIREKOD']);
        }

        return View('members.rekod.index', compact('bil', 'cawangans', 'statuses'));
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

        $data = [];

        if($cawangan_id == 1)
            $count = 16;
        else
            $count = 14;

        if(!empty($details->toArray()))
        {

            // Warganegara
            for($warga=1; $warga<=3; $warga++)
            {
                // Bangsa
                for($bangsa=1; $bangsa<=4; $bangsa++)
                {
                    // Kesalahan
                    for($kesalahan=1; $kesalahan<=$count; $kesalahan++)
                    {
                        // Jantina
                        for($jantina=1; $jantina<=2; $jantina++)
                        {
                            $details = Details::where('tarikh', 'like', Request::get('tarikh'))
                                ->where('cawangan_id', Request::get('cawangan_id'))
                                ->where('warganegara_id', $warga)
                                ->where('bangsa_id', $bangsa)
                                ->where('kesalahan_id', $kesalahan)
                                ->where('jantina_id', $jantina)
                                ->first();

                            array_push($data, [$warga . '_' . $bangsa .'_' . $kesalahan . '_' . $jantina => $details->jumlah]);

                        }
                    }
                }
            }
        }

//        dd($data);

        return View('members.rekod.display.details',
            compact('bil', 'details', 'tarikh', 'cawangan', 'flag'));
    }

    public function detailsPost()
    {
        $tarikh = Request::get('tarikh');
        $cawangan = Request::get('cawangan');

        $cawangan_id = Cawangan::where('nama', $cawangan)->first()->id;

        dd(Request::get('1_4_1_1'));

        if($cawangan_id == 1)
            $count = 16;
        else
            $count = 14;

//        dd($count);

        // Warganegara
        for($warga=1; $warga<=3; $warga++)
        {
            // Bangsa
            for($bangsa=1; $bangsa<=4; $bangsa++)
            {
                // Kesalahan
                for($kesalahan=1; $kesalahan<=$count; $kesalahan++)
                {
                    // Jantina
                    for($jantina=1; $jantina<=2; $jantina++)
                    {
                        Details::create([
                            'tarikh'        => $tarikh,
                            'cawangan_id'   => $cawangan_id,
                            'warganegara_id'=> $warga,
                            'bangsa_id'     => $bangsa,
                            'kesalahan_id'  => $kesalahan,
                            'jantina_id'    => $jantina,
                            'jumlah'        => Request::get($warga . '_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                        ]);
                    }
                }
            }
        }

        return Redirect::back();

    }
}
