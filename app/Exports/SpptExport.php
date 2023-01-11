<?php

namespace App\Exports;

use App\Models\Sppt;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class SpptExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return Sppt::where('User_id', auth()->user()->id)->get();
    }
}
