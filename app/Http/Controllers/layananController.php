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

    // Fungsi Rawat Jalan
    public function rawatJalan()
    {
        return view('user.rawat-jalan');
    }

    // Fungsi Rawat Inap
    public function rawatInap()
    {
        return view('user.rawat-inap');
    }

    // Fungsi tipe ruangan
    public function tipeRuangan()
    {
        return view('user.tipe-ruangan');
    }

    // Fungsi Detail Ruangan
    public function detailRuangan()
    {
        return view('user.detail-ruangan');
    }
}
