<?php

namespace App\Http\Controllers;

use App\Models\Sppt;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardSpptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sppts.index',[
            'sppts' => Sppt::where('User_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sppts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validataData = $request->validate([
            'nop'=>'required|min:2|max:18',
            'nama'=> 'required|min:2|max:255',
            'alamat_op'=> 'required|min:3|max:255',
            'alamat_wp'=> 'required|min:3|max:255',
            'luas'=> 'required|max:255',
            'jenis_pajak'=> 'required',
            'pajak'=> 'required|max:255',
            'tahun'=> 'required|min:4|max:4',
            'keterangan'=>'required|max:255'
        ]);

        $validataData['user_id']= auth()->user()->id;
    
        Sppt::create($validataData);
        Alert::success('Di Tambahkan', 'SPPT Berhasil di Tambahkan');
        return redirect('/dashboard/sppt')->with('berhasil', 'SPPT baru di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sppt  $sppt
     * @return \Illuminate\Http\Response
     */
    public function show(Sppt $sppt)
    {
        return view('dashboard.sppts.show',[
            'sppt' => $sppt
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sppt  $sppt
     * @return \Illuminate\Http\Response
     */
    public function edit(Sppt $sppt)
    {
        return view('dashboard.sppts.edit',[
            'sppt'=>$sppt
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sppt  $sppt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sppt $sppt)
    {
        $rules =[
            'nop'=>'required|min:18|max:18',
            'nama'=> 'required|min:2|max:255',
            'alamat_op'=> 'required|min:3|max:255',
            'alamat_wp'=> 'required|min:3|max:255',
            'luas'=> 'required|max:255',
            'jenis_pajak'=> 'required',
            'pajak'=> 'required|max:255',
            'tahun'=> 'required|min:4|max:4',
            'keterangan'=>'required|max:255'
        ];
        $valdateData = $request->validate($rules);
        Sppt::where('id', $sppt->id)
            ->update($valdateData);
        Alert::success('Di Ubah', 'SPPT Berhasil di Ubah');
        return redirect('/dashboard/sppt')->with('berhasil', 'SPPT berhasil di di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sppt  $sppt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sppt $sppt)
    {
        Sppt::destroy($sppt->id);
        Alert::success('Di Hapus', 'SPPT Berhasil di Hapus');
        return redirect('/dashboard/sppt')->with('berhasil', 'SPPT baru di hapus');
    }
}
