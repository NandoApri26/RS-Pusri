<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hubungiKamiController extends Controller
{
    public function kontak()
    {
        return view('user.kontak');
    }
}
