<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    if(Auth::check())
    {
//        return Auth::user()->name;
        if(Auth::user()->name == 'admin')
            return redirect()->route('admin.index');
        else
            return redirect()->route('members.index');
    } else {
        return redirect()->route('login');
    }
});

Route::get('/login', [
    'as'    => 'login',
    'uses'  => 'LoginController@index'
]);

Route::post('/authenticate', [
    'as'    => 'authenticate',
    'uses'  => 'LoginController@authenticate'
]);

Route::get('/logout', [
    'as'    => 'logout',
    'uses'  => 'LoginController@logout'
]);

// ADMIN

Route::group(['prefix' => 'admin'], function() {

    Route::get('index', [
        'as'    => 'admin.index',
        'uses'  => 'Admin\RecordsController@index'
    ]);

    Route::get('ringkasan/ringkasan2', [
        'as'    => 'admin.ringkasan2',
        'uses'  => 'Admin\RecordsController@ringkasan2'
    ]);

    Route::get('ringkasan/ringkasan3', [
        'as'    => 'admin.ringkasan3',
        'uses'  => 'Admin\RecordsController@ringkasan3'
    ]);

    Route::get('ringkasan/ringkasan4', [
        'as'    => 'admin.ringkasan4',
        'uses'  => 'Admin\RecordsController@ringkasan4'
    ]);

    Route::get('ringkasan/ringkasan5', [
        'as'    => 'admin.ringkasan5',
        'uses'  => 'Admin\RecordsController@ringkasan5'
    ]);

    Route::get('ringkasan/ringkasan6', [
        'as'    => 'admin.ringkasan6',
        'uses'  => 'Admin\RecordsController@ringkasan6'
    ]);

    Route::get('ringkasan/ringkasan7', [
        'as'    => 'admin.ringkasan7',
        'uses'  => 'Admin\RecordsController@ringkasan7'
    ]);

    Route::get('ringkasan/ringkasan8', [
        'as'    => 'admin.ringkasan8',
        'uses'  => 'Admin\RecordsController@ringkasan8'
    ]);



});




Route::group(['prefix' => 'members', 'middleware' => 'auth'], function() {

    // SETUP

    Route::get('pengguna', [
        'as'    => 'members.setup.pengguna',
        'uses'  => 'Members\SetupController@pengguna'
    ]);

    Route::post('pengguna', [
        'as'    => 'members.setup.pengguna',
        'uses'  => 'Members\SetupController@penggunaPost'
    ]);

    Route::get('lokasi', [
        'as'    => 'members.setup.lokasi',
        'uses'  => 'Members\SetupController@lokasi'
    ]);

    Route::post('lokasi', [
        'as'    => 'members.setup.lokasi',
        'uses'  => 'Members\SetupController@lokasiPost'
    ]);



    Route::get('warganegara', [
        'as' => 'members.setup.warganegara',
        'uses' => 'Members\SetupController@warganegara'
    ]);

    Route::post('warganegara', [
        'as' => 'members.setup.warganegaraPost',
        'uses' => 'Members\SetupController@warganegaraPost'
    ]);

    Route::get('cawangan', [
        'as' => 'members.setup.cawangan',
        'uses' => 'Members\SetupController@cawangan'
    ]);

    Route::post('cawangan', [
        'as' => 'members.setup.cawanganPost',
        'uses' => 'Members\SetupController@cawanganPost'
    ]);

    Route::get('jantina', [
        'as' => 'members.setup.jantina',
        'uses' => 'Members\SetupController@jantina'
    ]);

    Route::post('jantina', [
        'as'    => 'members.setup.jantinaPost',
        'uses'  => 'Members\SetupController@jantinaPost'
    ]);

    Route::get('bangsa', [
        'as' => 'members.setup.bangsa',
        'uses' => 'Members\SetupController@bangsa'
    ]);

    Route::get('kategori', [
        'as' => 'members.setup.kategori',
        'uses' => 'Members\SetupController@kategori'
    ]);

    Route::post('kategori', [
        'as'    => 'members.setup.kategoriPost',
        'uses'  => 'Members\SetupController@kategoriPost'
    ]);

    Route::get('kesalahan', [
        'as' => 'members.setup.kesalahan',
        'uses' => 'Members\SetupController@kesalahan'
    ]);

    Route::post('kesalahan', [
        'as' => 'members.setup.kesalahanPost',
        'uses' => 'Members\SetupController@kesalahanPost'
    ]);

    Route::get('pegawai', [
        'as' => 'members.setup.pegawai',
        'uses' => 'Members\SetupController@pegawai'
    ]);

    Route::post('pegawai', [
        'as'    => 'members.setup.pegawaiPost',
        'uses'  => 'Members\SetupController@pegawaiPost'
    ]);

    Route::get('delete', [
        'as'    => 'members.setup.delete',
        'uses'  => 'Members\SetupController@delete'
    ]);


    // Rekod

    Route::get('index', [
        'as'    => 'members.rekod.index',
        'uses'  => 'Members\RekodController@index'
    ]);

    Route::post('index', [
        'as'    => 'members.rekod.indexPost',
        'uses'  => 'Members\RekodController@indexPost'
    ]);

    Route::get('parol', [
        'as'    => 'members.rekod.parol',
        'uses'  => 'Members\RekodController@parol'
    ]);

    Route::post('parol', [
        'as'    => 'members.rekod.parol.post',
        'uses'  => 'Members\RekodController@parolPost'
    ]);

    Route::post('parol/update', [
        'as'    => 'members.rekod.parol.update',
        'uses'  => 'Members\RekodController@parolUpdate'
    ]);

    Route::post('rekod', [
        'as'    => 'members.rekod.index.post',
        'uses'  => 'Members\RekodController@detailsPost'
    ]);

    Route::post('rekod/update', [
        'as'    => 'members.rekod.index.update',
        'uses'  => 'Members\RekodController@detailsUpdate'
    ]);

    //  KURSUS

    Route::get('kursus', [
        'as'    => 'members.rekod.kursus.index',
        'uses'  =>'Members\KursusController@index'
    ]);

    Route::post('kursus', [
        'as'    => 'members.rekod.kursus.post',
        'uses'  => 'Members\KursusController@kursusPost'
    ]);



    // CETAK

    Route::group(['prefix' => 'cetak'], function() {

        Route::get('/{cawangan}/{tarikh}', [
            'as'    => 'members.rekod.cetak',
            'uses'  => 'Members\CetakController@index'
        ]);

        Route::get('/parol/{cawangan}/{tarikh}', [
            'as'    => 'members.rekod.parol.cetak',
            'uses'  => 'Members\CetakController@parol'
        ]);

    });


    // CORE
    Route::get('/members', [
        'as'    => 'members.index',
        'uses'  => 'Members\MembersController@index'
    ]);

    Route::get('carian', [
        'as'    => 'members.carian',
        'uses'  => 'Members\CarianController@index'
    ]);

    Route::post('carian', [
        'as'    => 'members.carianPost',
        'uses'  => 'Members\CarianController@carianPost'
    ]);

});
