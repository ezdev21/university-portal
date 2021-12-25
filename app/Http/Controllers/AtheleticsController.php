<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAtheleticsRequest;
use App\Http\Requests\UpdateAtheleticsRequest;
use App\Models\Atheletics;

class AtheleticsController extends Controller
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
     * @param  \App\Http\Requests\StoreAtheleticsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAtheleticsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atheletics  $atheletics
     * @return \Illuminate\Http\Response
     */
    public function show(Atheletics $atheletics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atheletics  $atheletics
     * @return \Illuminate\Http\Response
     */
    public function edit(Atheletics $atheletics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAtheleticsRequest  $request
     * @param  \App\Models\Atheletics  $atheletics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAtheleticsRequest $request, Atheletics $atheletics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atheletics  $atheletics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atheletics $atheletics)
    {
        //
    }
}
