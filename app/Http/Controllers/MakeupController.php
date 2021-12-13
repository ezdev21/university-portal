<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use App\Http\Requests\StoreMakeupRequest;
use App\Http\Requests\UpdateMakeupRequest;

class MakeupController extends Controller
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
     * @param  \App\Http\Requests\StoreMakeupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMakeupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function show(Makeup $makeup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function edit(Makeup $makeup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMakeupRequest  $request
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMakeupRequest $request, Makeup $makeup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makeup $makeup)
    {
        //
    }
}
