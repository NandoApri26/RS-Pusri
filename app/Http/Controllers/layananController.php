<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layananController extends Controller
{
    // Fungsi Jadwal
    public function jadwal()
    {
        return view('user.jadwal');
    }


}
