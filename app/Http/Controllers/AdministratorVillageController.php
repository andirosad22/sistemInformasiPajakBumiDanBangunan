<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdministratorVillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villages = Village::all();
        foreach($villages as $village){
            return view('dashboard.village.index',[
                'village' => $village
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village)
    {
        return view('dashboard.village.edit',[
            'village'=>$village
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        $rules =[
            'nama'=> 'required|min:2|max:255',
            'username'=> 'required|min:2|max:255',
            'alamat'=> 'required|min:3|max:255',
            'kontak'=> 'required|min:3|max:255',
            'deskripsi'=> 'required|min:3|max:255'
        ];
        $valdateData = $request->validate($rules);
        Village::where('id', $village->id)
            ->update($valdateData);
        Alert::success('Di Ubah', 'SPPT Berhasil di Ubah');
        return redirect('/dashboard/village');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        //
    }
}
