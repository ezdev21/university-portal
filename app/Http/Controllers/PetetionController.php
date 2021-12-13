<?php

namespace App\Http\Controllers;

use App\Models\Petetion;
use App\Http\Requests\StorePetetionRequest;
use App\Http\Requests\UpdatePetetionRequest;

class PetetionController extends Controller
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
     * @param  \App\Http\Requests\StorePetetionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetetionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petetion  $petetion
     * @return \Illuminate\Http\Response
     */
    public function show(Petetion $petetion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petetion  $petetion
     * @return \Illuminate\Http\Response
     */
    public function edit(Petetion $petetion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetetionRequest  $request
     * @param  \App\Models\Petetion  $petetion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetetionRequest $request, Petetion $petetion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petetion  $petetion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petetion $petetion)
    {
        //
    }
}
