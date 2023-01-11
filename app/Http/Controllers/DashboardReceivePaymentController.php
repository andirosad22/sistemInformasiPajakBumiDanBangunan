<?php

namespace App\Http\Controllers;

use App\Models\Sppt;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardReceivePaymentController extends Controller
{
    public function index()
    {
        $sppts = Sppt::latest();
        if(request('search')){
            $sppts->where('nop', 'like','%'.request('search').'%')
                ->orWhere('nama', 'like', '%' . request('search'). '%');
            return view('Dashboard.receivepayment.index',[
                "title" => "Cek Pajak",
                'sppts' => $sppts->get()
            ]);
        }
        return view('Dashboard.receivepayment.index',[
            'sppts' => Sppt::where('User_id', auth()->user()->id)->get()
        ]);
    }
    public function update(Sppt $sppt)
    {
        return view('dashboard.receivepayment.pay',[
            'sppt' => $sppt
        ]);
    }

    public function edit(Request $request, Sppt $sppt)
    {
        $rules =[
            'nop'=>'required|min:2|max:18',
            'nama'=> 'required|min:2|max:255',
            'keterangan'=>'required|max:255'
        ];
        $valdateData = $request->validate($rules);
        Sppt::where('id', $sppt->id)
            ->update($valdateData);
        Alert::success('Bayar',"SPPT $sppt->nama Terbayar");
        return redirect('/dashboard/receivepayment')->with('berhasil', 'SPPT berhasil di di ubah');
    }
}
