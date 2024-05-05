<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informasiController extends Controller
{
    public function berita()
    {
        return view('user.berita');
    }

    public function detailBerita()
    {
        return view('user.detail-berita');
    }
}
