<?php

namespace App\Http\Controllers;

use App\Exports\ExportLaporan;
use App\Exports\ExportTerhutang;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashboardExportController extends Controller
{
    public function setor()
    {
    //  return (new ExportLaporan)->download('Setor.pdf', Excel::DOM);
        return Excel::download(new ExportLaporan, 'Setor.xlsx');   
    }

    public function terhutang()
    {
     return Excel::download(new ExportTerhutang, 'Belum_Bayar.xlsx');   
    }

    public function lunas()
    {
     return Excel::download(new ExportLaporan, 'Setor.xlsx');   
    }
}
