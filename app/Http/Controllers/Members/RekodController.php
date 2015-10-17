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
        $index = 0;
        $datas1 =  [];
        $datas2 = [];

        $tarikh = Request::get('tarikh');
        $cawangan = Cawangan::find(Request::get('cawangan_id'))->nama;
        $details = Details::where('tarikh', 'like', Request::get('tarikh') . '%')
            ->where('cawangan_id', Request::get('cawangan_id'))
            ->get();

        return View('members.rekod.display.details',
            compact('bil', 'details', 'tarikh', 'cawangan'));
    }

    public function detailsPost()
    {
        dd(Request::all());
    }
}
