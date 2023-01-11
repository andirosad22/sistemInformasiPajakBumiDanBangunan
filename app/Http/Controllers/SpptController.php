<?php

namespace App\Http\Controllers;

use App\Exports\SpptExport;
use Illuminate\Http\Request;
use App\Imports\SpptImport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class SpptController extends Controller
{
    public function import()
    {
        return view('dashboard.sppts.import');
    }
    public function store(Request $request) 
    {

        // return $request->file('importExcel')->store('data-sppt');
        // ddd($request);
        $file = $request->file('importExcel');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSppt',$namaFile);
        Excel::import(new SpptImport, public_path('/DataSppt/'.$namaFile));
        return redirect('/dashboard/sppt');
    }

    public function exportview()
    {
        return view('dashboard.reports.index');
    }

    public function export()
    { 
        return Excel::download(new SpptExport, 'sppt.xlsx');
    }
}
