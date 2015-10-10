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
        return redirect()->route('members.index');
    else
        return redirect()->route('login');
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

Route::group(['prefix' => 'members'], function() {

    // SETUP

    Route::get('warganegara', [
        'as'    => 'members.setup.warganegara',
        'uses'  => 'Members\SetupController@warganegara'
    ]);

    Route::post('warganegara', [
        'as'    => 'members.setup.warganegaraPost',
        'uses'  => 'Members\SetupController@warganegaraPost'
    ]);

    Route::get('cawangan', [
        'as'    => 'members.setup.cawangan',
        'uses'  => 'Members\SetupController@cawangan'
    ]);

    Route::get('jantina', [
        'as'    => 'members.setup.jantina',
        'uses'  => 'Members\SetupController@jantina'
    ]);

    Route::get('bangsa', [
        'as'    => 'members.setup.bangsa',
        'uses'  => 'Members\SetupController@bangsa'
    ]);

    Route::get('kategori', [
        'as'    => 'members.setup.kategori',
        'uses'  => 'Members\SetupController@kategori'
    ]);

    Route::get('kesalahan', [
        'as'    => 'members.setup.kesalahan',
        'uses'  => 'Members\SetupController@kesalahan'
    ]);

    Route::get('pegawai', [
        'as'    => 'members.setup.pegawai',
        'uses'  => 'Members\SetupController@pegawai'
    ]);












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
