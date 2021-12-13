<?php

namespace App\Http\Controllers;

use App\Models\Liberary;
use App\Http\Requests\StoreLiberaryRequest;
use App\Http\Requests\UpdateLiberaryRequest;

class LiberaryController extends Controller
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
     * @param  \App\Http\Requests\StoreLiberaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLiberaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liberary  $liberary
     * @return \Illuminate\Http\Response
     */
    public function show(Liberary $liberary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liberary  $liberary
     * @return \Illuminate\Http\Response
     */
    public function edit(Liberary $liberary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLiberaryRequest  $request
     * @param  \App\Models\Liberary  $liberary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLiberaryRequest $request, Liberary $liberary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liberary  $liberary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liberary $liberary)
    {
        //
    }
}
