<?php

namespace App\Http\Controllers\Members;

use App\Cawangan;
use App\Details;
use Carbon\Carbon;
use Request;
use App\Http\Controllers\Controller;

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

//        dd($statuses->toArray());

//        echo '<pre>';
//        print_r($statuses);
//        echo '</pre>';

//        exit;

        return View('members.rekod.index', compact('bil', 'cawangans', 'statuses'));
    }

    public function indexPost()
    {
        return Request::all();
    }
}
