<?php

namespace App\Http\Controllers;

use App\Models\Type_user;
use App\Http\Requests\StoreType_userRequest;
use App\Http\Requests\UpdateType_userRequest;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreType_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreType_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type_user  $type_user
     * @return \Illuminate\Http\Response
     */
    public function show(Type_user $type_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type_user  $type_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Type_user $type_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateType_userRequest  $request
     * @param  \App\Models\Type_user  $type_user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateType_userRequest $request, Type_user $type_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type_user  $type_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type_user $type_user)
    {
        //
    }
}
