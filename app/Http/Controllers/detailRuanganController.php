<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailRuanganController extends Controller
{
    public function index()
    {
        return view('user.detail-ruangan');
    }
}
