<?php

namespace App\Http\Controllers\Members;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function index()
    {
        return View('members.index');
    }
}
