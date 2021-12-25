<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaculityRequest;
use App\Http\Requests\UpdateFaculityRequest;
use App\Models\Faculity;

class FaculityController extends Controller
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
     * @param  \App\Http\Requests\StoreFaculityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaculityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculity  $faculity
     * @return \Illuminate\Http\Response
     */
    public function show(Faculity $faculity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculity  $faculity
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculity $faculity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaculityRequest  $request
     * @param  \App\Models\Faculity  $faculity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaculityRequest $request, Faculity $faculity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculity  $faculity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculity $faculity)
    {
        //
    }
}
