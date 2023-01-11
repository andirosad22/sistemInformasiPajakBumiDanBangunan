<?php

namespace App\Exports;

use App\Models\Sppt;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportTerhutang implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array
    {
        return [
            'No',
            'NOP',
            'Nama',
            'Alamat WP',
            'Alamat OP',
            'Luas',
            'jenis Pajak',
            'Pajak',
            'Tahun',
            'Keterangan'
        ];
    }
    public function collection()
    {
        $data = Sppt::where('User_id', auth()->user()->id)->where('keterangan', 'Belum Bayar')->get();
        $export[]=[
            'No',
            'NOP',
            'Nama',
            'Alamat WP',
            'Alamat OP',
            'Luas',
            'Jenis Pajak',
            'Pajak',
            'Tahun',
            'Keterangan'
        ];
        $no = 1;
        foreach($data as $key){
            $export[]=[
            'No'=>$no,
            'NOP'=>$key->nop,
            'Nama'=>$key->nama,
            'Alamat WP'=>$key->alamat_wp,
            'Alamat OP'=>$key->alamat_op,
            'Luas'=>$key->luas,
            'Jenis Pajak'=>$key->jenis_pajak,
            'Pajak'=>$key->pajak,
            'Tahun'=>$key->tahun,
            'Keterangan'=>$key->keterangan
            ];
            $no++;
        }
        return collect($export);
    }
}
