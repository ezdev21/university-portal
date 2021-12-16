<?php

namespace App\Http\Controllers;

use App\Models\Proctor;
use App\Http\Requests\StoreProctorRequest;
use App\Http\Requests\UpdateProctorRequest;

class ProctorController extends Controller
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
     * @param  \App\Http\Requests\StoreProctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProctorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proctor  $proctor
     * @return \Illuminate\Http\Response
     */
    public function show(Proctor $proctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proctor  $proctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proctor $proctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProctorRequest  $request
     * @param  \App\Models\Proctor  $proctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProctorRequest $request, Proctor $proctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proctor  $proctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proctor $proctor)
    {
        //
    }
}
