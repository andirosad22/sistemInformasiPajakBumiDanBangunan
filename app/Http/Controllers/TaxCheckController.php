<?php

namespace App\Http\Controllers;

use App\Models\Sppt;
use Illuminate\Http\Request;

class TaxCheckController extends Controller
{
    public function index()
    {
        $sppts = Sppt::latest();
        if(request('search')){
            $sppts->where('nop', 'like',request('search'));
            return view('tax',[
                "title" => "Cek Pajak",
                "sppts" => $sppts->get()
            ]);
        }
        return view('tax',[
                "title" => "Cek Pajak",
                "sppts" => "Null"
        ]);
    }
}
