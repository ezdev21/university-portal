<?php

namespace App\Http\Controllers;

use App\Models\Cafteria;
use App\Http\Requests\StoreCafteriaRequest;
use App\Http\Requests\UpdateCafteriaRequest;

class CafteriaController extends Controller
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
     * @param  \App\Http\Requests\StoreCafteriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCafteriaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cafteria  $cafteria
     * @return \Illuminate\Http\Response
     */
    public function show(Cafteria $cafteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cafteria  $cafteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Cafteria $cafteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCafteriaRequest  $request
     * @param  \App\Models\Cafteria  $cafteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCafteriaRequest $request, Cafteria $cafteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cafteria  $cafteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cafteria $cafteria)
    {
        //
    }
}
