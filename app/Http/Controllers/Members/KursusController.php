<?php

namespace App\Http\Controllers\Members;

use App\Kursus;
use App\Lokasi;
use Illuminate\Support\Facades\Validator;
use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class KursusController extends Controller
{
// hello world
    public function index()
    {
        $tarikh = date('Y-m');

        $locations = Lokasi::all();
        $courses = Kursus::where('tarikh', 'like', $tarikh . '%')
            ->orderBy('tarikh', 'asc')
            ->get();

        if($locations->isEmpty())
        {
            Session::flash('error', 'Gagal. Sila rekodkan lokasi dahulu.');
            return Redirect::back();
        }

        return View('members.kursus.index', compact('locations', 'courses'));
    }

    public function kursusPost()
    {
        $validation = Validator::make(Request::all(), [
            'nama'      => 'required',
            'tarikh'    => 'required|date',
            'lokasi_id' => 'required|numeric',
            'tempoh'    => 'required|numeric'
        ]);

        if($validation->fails())
        {
            Session::flash('error', 'Gagal. Sila isikan semua ruangan dengan betul');
            return Redirect::back()->withInput();
        }

        Kursus::create([
            'nama'      => Request::get('nama'),
            'tarikh'    => Request::get('tarikh'),
            'lokasi_id'    => Request::get('lokasi_id'),
            'tempoh'    => Request::get('tempoh')
        ]);

        return Redirect::route('members.rekod.kursus.index');
    }
}
