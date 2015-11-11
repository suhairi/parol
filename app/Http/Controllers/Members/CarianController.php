<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Request;
use App\Cawangan;
use App\Details;
use Carbon\Carbon;

class CarianController extends Controller
{
    public function index()
    {
        return View('members.carian');
    }

    public function carianPost()
    {
        $tarikh = Request::get('tarikh');
        $bil = 1;
        $statuses = [];
        $data[1] = $data[2] = $data[3] = $data[4] = 0;

        $cawangans = Cawangan::all();

        foreach($cawangans as $cawangan)
        {
            $details = Details::where('tarikh', 'like', $tarikh . '%')
                ->where('cawangan_id', $cawangan->id)
                ->get();

//            dd($details);

            if ($details->isEmpty())
            {
                array_push($statuses, ['cawangan' => $cawangan->nama, 'status' => 'BELUM DIREKOD']);
                Session::flash('error', 'Tiada data.');
            } else {
                array_push($statuses, ['cawangan' => $cawangan->nama, 'status' => 'TELAH DIREKOD']);

                $jumlah = 0;
                foreach($details as $detail)
                    $jumlah += $detail->jumlah;

                $data[$cawangan->id] = $jumlah;
            }
        }

        $yourFirstChart["chart"] = array("type" => "bar");
        $yourFirstChart["title"] = array("text" => "Tarikh : " . Carbon::parse($tarikh)->format('d-m-Y'));
        $yourFirstChart["xAxis"] = array("categories" => ['Alor Setar', 'Pokok Sena', 'Sungai Petani', 'Parol']);
        $yourFirstChart["yAxis"] = array("title" => array("text" => "Bilangan Banduan / Tahanan"));

        $yourFirstChart["series"] = [
            array("name" => "JUMLAH KESELURUHAN", "data" => [$data[1], $data[2], $data[3], $data[4]])
        ];

        return View('members.carian.result', compact('bil', 'cawangans', 'statuses', 'yourFirstChart'));
    }
}
