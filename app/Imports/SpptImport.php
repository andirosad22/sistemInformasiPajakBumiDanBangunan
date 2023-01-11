<?php

namespace App\Imports;

use App\Models\Sppt;
use Maatwebsite\Excel\Concerns\ToModel;

class SpptImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sppt([
            'user_id'=> auth()->user()->id,
            'nop' => $row[1],
            'nama' => $row[2], 
            'alamat_op' => $row[3],
           'alamat_wp' => $row[4],
           'luas' => $row[5],
           'jenis_pajak' => $row[6],
           'pajak' => $row[7],
           'tahun' => $row[8],
           'keterangan' => $row[9]
           
        ]);
    }
}
