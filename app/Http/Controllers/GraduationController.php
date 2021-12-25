<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGraduationRequest;
use App\Http\Requests\UpdateGraduationRequest;
use App\Models\Graduation;

class GraduationController extends Controller
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
     * @param  \App\Http\Requests\StoreGraduationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGraduationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return \Illuminate\Http\Response
     */
    public function show(Graduation $graduation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduation $graduation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGraduationRequest  $request
     * @param  \App\Models\Graduation  $graduation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGraduationRequest $request, Graduation $graduation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graduation  $graduation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduation $graduation)
    {
        //
    }
}
