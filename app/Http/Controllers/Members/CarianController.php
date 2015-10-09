<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Request;

class CarianController extends Controller
{
    public function index()
    {
        return View('members.carian');
    }

    public function carianPost()
    {
        return Request::all();
    }
}
