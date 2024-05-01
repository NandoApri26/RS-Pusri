<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dokterController extends Controller
{
    public function index()
    {
        return view('user.dokter');
    }

    public function detail()
    {
        return view('user.detail-dokter');
    }
}
