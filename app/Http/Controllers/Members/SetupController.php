<?php

namespace App\Http\Controllers\Members;

use App\Bangsa;
use App\Cawangan;
use App\Jantina;
use App\Kategori;
use App\Kesalahan;
use App\Warganegara;
use App\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Request;

class SetupController extends Controller
{
    public function warganegara()
    {
        $bil = 1;
        $datas = Warganegara::all();

        return View('members.setup.warganegara', compact('bil', 'datas'));
    }

    public function warganegaraPost()
    {

        if(Warganegara::create(['nama' => strtoupper(Request::get('nama'))]))
        {
            Session::flash('success', 'Berjaya direkod');
            return Redirect::route('members.setup.warganegara');
        }

        return Request::all();
    }

    public function cawangan()
    {
        $bil = 1;
        $datas = Cawangan::all();

        return View('members.setup.cawangan', compact('bil', 'datas'));
    }

    public function jantina()
    {
        $bil = 1;
        $datas = Jantina::all();

        return View('members.setup.jantina', compact('bil', 'datas'));
    }

    public function bangsa()
    {
        $bil = 1;
        $datas = Bangsa::all();

        return View('members.setup.bangsa', compact('bil', 'datas'));
    }

    public function kategori()
    {
        $bil = 1;
        $datas = Kategori::all();

        return View('members.setup.kategori', compact('bil', 'datas'));
    }

    public function kesalahan()
    {
        $bil = 1;
        $datas = Kesalahan::all();
        $datas2 = Kategori::all();

        return View('members.setup.kesalahan', compact('bil', 'datas', 'datas2'));
    }

    public function pegawai()
    {
        $bil = 1;
        $datas = Pegawai::all();

        return View('members.setup.pegawai', compact('bil', 'datas'));
    }
}
