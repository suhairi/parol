<?php

namespace App\Http\Controllers\Members;

use App\Lokasi;
use App\User;
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
use Illuminate\Support\Facades\Validator;
use Request;

class SetupController extends Controller
{
    public function pengguna()
    {
        $users = User::all();

        return View('members.setup.pengguna', compact('users'));
    }

    public function penggunaPost()
    {

        $validation = Validator::make(Request::all(), [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if($validation->fails())
        {
            Session::flash('error','Gagal. Sila isikan ruangan dengan betul');
            return Redirect::route('members.setup.pengguna')
                ->withInput()
                ->withErrors($validation);
        }

        User::create([
            'name'      => Request::get('name'),
            'email'     => Request::get('email'),
            'password'  => \Hash::make(Request::get('password'))
        ]);

        return Redirect::route('members.setup.pengguna');
    }

    public function lokasi()
    {
        $locations = Lokasi::all();

        return View('members.setup.lokasi', compact('locations'));
    }

    public function lokasiPost()
    {
        $validation = Validator::make(Request::all(), [
            'name'  => 'required'
        ]);

        if($validation->fails())
        {
            Session::flash('error', 'Gagal. Sila isikan ruangan yang disediakan');
            return Redirect::back();
        }

        Lokasi::create([
            'nama'  => strtoupper(Request::get('name'))
        ]);

        return Redirect::route('members.setup.lokasi');
    }

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
