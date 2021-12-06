<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use App\Http\Requests\StoreAdvisorRequest;
use App\Http\Requests\UpdateAdvisorRequest;

class AdvisorController extends Controller
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
     * @param  \App\Http\Requests\StoreAdvisorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvisorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function show(Advisor $advisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Advisor $advisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdvisorRequest  $request
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvisorRequest $request, Advisor $advisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advisor $advisor)
    {
        //
    }
}
