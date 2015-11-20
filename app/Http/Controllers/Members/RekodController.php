<?php

namespace App\Http\Controllers\Members;

use App\Cawangan;
use App\Details;
use App\Kategori;
use App\Keluarmasuk;
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
        $data[1] = $data[2] = $data[3] = $data[4] = 0;

        $cawangans = Cawangan::all();

        foreach($cawangans as $cawangan)
        {
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
        $yourFirstChart["xAxis"] = array("categories" => ['Alor Setar', 'Pokok Sena', 'Sungai Petani', 'Parol']);
        $yourFirstChart["yAxis"] = array("title" => array("text" => "Bilangan Banduan / Tahanan"));

        $yourFirstChart["series"] = [
            array("name" => "JUMLAH KESELURUHAN", "data" => [$data[1], $data[2], $data[3], $data[4]])
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

        if(Request::get('cawangan_id') == 4)
            return Redirect::route('members.rekod.parol', ['tarikh' => Request::get('tarikh')]);

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

        $datas = $datas2 = [];

        if($cawangan_id == 1 || $cawangan_id == 2)
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

        $details = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
            ->where('cawangan_id', $cawangan_id)
            ->get();

        $details = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
            ->where('cawangan_id', Request::get('cawangan_id'))
            ->get();

        if(!empty($details->toArray()))
        {
            for ($i = 1; $i <= 9; $i++)
            {
                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'melayu')
                    ->first();

                array_push($datas2, [
                    $i . '_melayu' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'cina')
                    ->first();
                array_push($datas2, [
                    $i . '_cina' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'india')
                    ->first();
                array_push($datas2, [
                    $i . '_india' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'singh')
                    ->first();
                array_push($datas2, [
                    $i . '_singh' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'pathan')
                    ->first();
                array_push($datas2, [
                    $i . '_pathan' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'ptetap')
                    ->first();
                array_push($datas2, [
                    $i . '_ptetap' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'llb')
                    ->first();
                array_push($datas2, [
                    $i . '_llb' => $detail->jumlah
                ]);

                $detail = Keluarmasuk::where('tarikh', 'like', Request::get('tarikh') . '%')
                    ->where('cawangan_id', $cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'wanita')
                    ->first();
                array_push($datas2, [
                    $i . '_wanita' => $detail->jumlah
                ]);

            }
        }

//        dd($datas2);
//        return $datas2[45]['6_ptetap'];
        return View('members.rekod.display.details',
            compact('bil', 'details', 'tarikh', 'cawangan', 'flag', 'datas', 'datas2'));
    }

    public function parol()
    {
        $tarikh = Request::get('tarikh');
        $cawangan = Cawangan::find(4)->nama;
        $flag = false;

        $details = Details::where('cawangan_id', 4)
            ->where('tarikh', 'like', Request::get('tarikh') . '%')
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
                        $detail = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
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
        return View('members.rekod.display.details_parol', compact('tarikh', 'cawangan', 'flag', 'datas'));
    }

    public function parolPost()
    {
//        dd(Request::all());

        for($kesalahan = 17; $kesalahan <= 23; $kesalahan++)
        {
            for($bangsa = 1; $bangsa <= 3; $bangsa++)
            {
                for($jantina = 1; $jantina <= 2; $jantina++)
                {
                    Details::create([
                        'tarikh' => Request::get('tarikh'),
                        'cawangan_id' => 4,
                        'warganegara_id' => 1,
                        'bangsa_id' => $bangsa,
                        'kesalahan_id' => $kesalahan,
                        'jantina_id' => $jantina,
                        'jumlah' => Request::get('1_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                    ]);

                }
            }
        }

        return Redirect::route('members.rekod.index');
    }

    public function parolUpdate()
    {
//        return Request::all();

        for($kesalahan = 17; $kesalahan <= 23; $kesalahan++)
        {
            for($bangsa = 1; $bangsa <= 3; $bangsa++)
            {
                for($jantina = 1; $jantina <= 2; $jantina++)
                {
                    $details = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
                        ->where('cawangan_id', 4)
                        ->where('warganegara_id', 1)
                        ->where('bangsa_id', $bangsa)
                        ->where('kesalahan_id', $kesalahan)
                        ->where('jantina_id', $jantina)
                        ->update([
                            'jumlah' => Request::get('1_' . $bangsa . '_' . $kesalahan . '_' . $jantina)
                        ]);

                }
            }
        }

        return Redirect::route('members.rekod.index');
    }

    public function detailsPost()
    {
        $tarikh = Request::get('tarikh');
        $cawangan = Request::get('cawangan');

        $cawangan_id = Cawangan::where('nama', $cawangan)->first()->id;

//        dd(Request::get('1_4_1_1'));

        if($cawangan_id == 1 || $cawangan_id == 2)
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

        // Create::Keluarmasuk

        for($i = 1; $i <= 9; $i++)
        {
            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'melayu',
                'jumlah'        => (int)Request::get($i .'_melayu')
            ]);

            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'cina',
                'jumlah'        => (int)Request::get($i .'_cina')
            ]);


            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'india',
                'jumlah'        => (int)Request::get($i .'_india')
            ]);

            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'singh',
                'jumlah'        => (int)Request::get($i .'_singh')
            ]);

            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'pathan',
                'jumlah'        => (int)Request::get($i .'_pathan')
            ]);

            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'ptetap',
                'jumlah'        => (int)Request::get($i .'_ptetap')
            ]);

            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'llb',
                'jumlah'        => (int)Request::get($i .'_llb')
            ]);

            Keluarmasuk::create([
                'tarikh'        => $tarikh,
                'cawangan_id'   => $cawangan_id,
                'kesalahan'     => $i,
                'bangsa'        => 'wanita',
                'jumlah'        => (int)Request::get($i .'_wanita')
            ]);
        }

        return Redirect::back();
    }

    public function detailsUpdate()
    {
        $tarikh = Request::get('tarikh');
        $cawangan = Request::get('cawangan');

        $cawangan_id = Cawangan::where('nama', $cawangan)->first()->id;

        if($cawangan_id == 1 || $cawangan_id == 2)
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

        // Update Keluarmasuk

        for($i = 1; $i <= 9; $i++)
        {
            if(Request::get($i . '_melayu'))
            {
                $bangsa = 'melayu';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'melayu')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_cina'))
            {
                $bangsa = 'cina';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'cina')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_india'))
            {
                $bangsa = 'india';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'india')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_singh'))
            {
                $bangsa = 'singh';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'singh')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_pathan'))
            {
                $bangsa = 'pathan';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'pathan')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_ptetap'))
            {
                $bangsa = 'ptetap';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'ptetap')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_llb'))
            {
                $bangsa = 'llb';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'llb')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }

            if(Request::get($i . '_wanita'))
            {
                $bangsa = 'wanita';

                Keluarmasuk::where('tarikh', $tarikh)
                    ->where('cawangan_id',$cawangan_id)
                    ->where('kesalahan', $i)
                    ->where('bangsa', 'wanita')
                    ->update(['jumlah' => Request::get($i .'_' . $bangsa)]);
            }
        }

        return Redirect::back();
    }

}


