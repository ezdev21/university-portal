<?php

namespace App\Http\Controllers;

use App\Models\GradeChangeRequest;
use App\Http\Requests\StoreGradeChangeRequestRequest;
use App\Http\Requests\UpdateGradeChangeRequestRequest;

class GradeChangeRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreGradeChangeRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeChangeRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GradeChangeRequest  $gradeChangeRequest
     * @return \Illuminate\Http\Response
     */
    public function show(GradeChangeRequest $gradeChangeRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradeChangeRequest  $gradeChangeRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeChangeRequest $gradeChangeRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeChangeRequestRequest  $request
     * @param  \App\Models\GradeChangeRequest  $gradeChangeRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeChangeRequestRequest $request, GradeChangeRequest $gradeChangeRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradeChangeRequest  $gradeChangeRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeChangeRequest $gradeChangeRequest)
    {
        //
    }
}
