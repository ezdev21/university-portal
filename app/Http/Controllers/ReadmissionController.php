<?php

namespace App\Http\Controllers;

use App\Models\Readmission;
use App\Http\Requests\StoreReadmissionRequest;
use App\Http\Requests\UpdateReadmissionRequest;

class ReadmissionController extends Controller
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
     * @param  \App\Http\Requests\StoreReadmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReadmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Readmission  $readmission
     * @return \Illuminate\Http\Response
     */
    public function show(Readmission $readmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Readmission  $readmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Readmission $readmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReadmissionRequest  $request
     * @param  \App\Models\Readmission  $readmission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReadmissionRequest $request, Readmission $readmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Readmission  $readmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Readmission $readmission)
    {
        //
    }
}
