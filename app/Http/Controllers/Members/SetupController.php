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

    public function cawanganPost()
    {
        if(Cawangan::create(['nama' => strtoupper(Request::get('nama'))]))
        {
            Session::flash('success', 'Berjaya direkod.');
            return Redirect::route('members.setup.cawangan');
        }
    }

    public function jantina()
    {
        $bil = 1;
        $datas = Jantina::all();

        return View('members.setup.jantina', compact('bil', 'datas'));
    }

    public function jantinaPost()
    {
        if(Jantina::create(['nama' => strtoupper(Request::get('nama'))]))
        {
            Session::flash('success', 'Berjaya direkod');
            return Redirect::route('members.setup.jantina');
        }

        Session::flash('failed', 'Gagal direkod');
        return Redirect::route('members.setup.jantina');
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

    public function kategoriPost()
    {
        if(Kategori::create(['nama' => strtoupper(Request::get('nama'))]))
        {
            Session::flash('success', 'Berjaya direkod');
            return Redirect::route('members.setup.kategori');
        }

        Session::flash('failed', 'Gagal direkod');
        return Redirect::route('members.setup.kategori');
    }

    public function kesalahan()
    {
        $bil = 1;
        $datas = Kesalahan::orderBy('kategori_id', 'asc')->get();
        $datas2 = Kategori::all();

        return View('members.setup.kesalahan', compact('bil', 'datas', 'datas2'));
    }

    public function kesalahanPost()
    {
        if(Kesalahan::create(['nama' => strtoupper(Request::get('nama')), 'kategori_id' => Request::get('kategori_id'),
            'kod' => strtoupper(Request::get('kod'))
            ]))
        {
            Session::flash('success', 'Berjaya direkod');
            return Redirect::route('members.setup.kesalahan');
        }

        Session::flash('failed', 'Gagal direkod');
        return Redirect::route('members.setup.kesalahan');
    }

    public function pegawai()
    {
        $bil = 1;
        $datas = Pegawai::all();

        return View('members.setup.pegawai', compact('bil', 'datas'));
    }

    public function pegawaiPost()
    {
        if(Pegawai::create(['nama' => strtoupper(Request::get('nama')), 'pangkat' => strtoupper(Request::get('pangkat'))]))
        {
            Session::flash('success', 'Berjaya direkod');
            return Redirect::route('members.setup.pegawai');
        }

        Session::flash('failed', 'Gagal direkod');
        return Redirect::route('members.setup.pegawai');
    }

    public function delete()
    {
        $table = 'App\\' . Request::get('table');

        $data = $table::find(Request::get('id'));

        if($data->delete())
        {
            Session::flash('success', 'Berjaya dipadam');
            return Redirect::route('members.setup.' . strtolower(Request::get('table')));
        }

        Session::flash('failed', 'Gagal dipadam');
        return Redirect::route('members.setup.' . strtolower(Request::get('table')));
    }
}
