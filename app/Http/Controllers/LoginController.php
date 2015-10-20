<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Request;


class LoginController extends Controller
{
    public function index()
    {
        return View('auth.login');
    }

    public function authenticate()
    {
        $validation = Validator::make(Request::all(), [
            'email'      => 'required|email',
            'password'   => 'required'
        ]);

        if($validation->fails()) {
            return Redirect('/')
                ->withInput()
                ->withErrors($validation);
        } else {
            if(Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')], 1))
            {
                return Redirect::intended('/');
            }
        }

        return Redirect::back();
    }

    public function logout()
    {
        Auth::logout();

        return Redirect('/');
    }

}
