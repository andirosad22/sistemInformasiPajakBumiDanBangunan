<?php

namespace App\Http\Controllers;

use App\Models\Sppt;
use Illuminate\Http\Request;

class DashboardLaporanController extends Controller
{
    public function terhutang()
    {
        
        return view('dashboard.laporan.terhutang',[
            'sppts' => Sppt::where('User_id', auth()->user()->id)->where('keterangan', 'Belum Bayar')->get()
        ]);
    }

    public function lunas()
    {
        return view('dashboard.laporan.lunas',[
            'sppts' => Sppt::where('User_id', auth()->user()->id)->where('keterangan', 'Petugas')->get()
        ]);
    }

    public function setor()
    {
        return view('dashboard.laporan.setor',[
            'sppts' => Sppt::where('User_id', auth()->user()->id)->where('keterangan', 'Petugas')->get()
        ]);
    }

    public function rekapitulasi()
    {
        return view('dashboard.laporan.rekapitulasi');
    }
}
