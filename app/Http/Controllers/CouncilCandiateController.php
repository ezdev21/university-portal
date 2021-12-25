<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouncilCandiateRequest;
use App\Http\Requests\UpdateCouncilCandiateRequest;
use App\Models\CouncilCandiate;

class CouncilCandiateController extends Controller
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
     * @param  \App\Http\Requests\StoreCouncilCandiateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouncilCandiateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouncilCandiate  $councilCandiate
     * @return \Illuminate\Http\Response
     */
    public function show(CouncilCandiate $councilCandiate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CouncilCandiate  $councilCandiate
     * @return \Illuminate\Http\Response
     */
    public function edit(CouncilCandiate $councilCandiate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouncilCandiateRequest  $request
     * @param  \App\Models\CouncilCandiate  $councilCandiate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouncilCandiateRequest $request, CouncilCandiate $councilCandiate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouncilCandiate  $councilCandiate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouncilCandiate $councilCandiate)
    {
        //
    }
}
