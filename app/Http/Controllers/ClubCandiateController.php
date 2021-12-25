<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClubCandiateRequest;
use App\Http\Requests\UpdateClubCandiateRequest;
use App\Models\ClubCandiate;

class ClubCandiateController extends Controller
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
     * @param  \App\Http\Requests\StoreClubCandiateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubCandiateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClubCandiate  $clubCandiate
     * @return \Illuminate\Http\Response
     */
    public function show(ClubCandiate $clubCandiate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClubCandiate  $clubCandiate
     * @return \Illuminate\Http\Response
     */
    public function edit(ClubCandiate $clubCandiate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubCandiateRequest  $request
     * @param  \App\Models\ClubCandiate  $clubCandiate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubCandiateRequest $request, ClubCandiate $clubCandiate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClubCandiate  $clubCandiate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClubCandiate $clubCandiate)
    {
        //
    }
}
