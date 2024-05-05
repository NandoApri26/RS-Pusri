<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informasiController extends Controller
{
    public function berita()
    {
        return view('user.berita');
    }


}
