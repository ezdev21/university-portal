<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentCouncilRequest;
use App\Http\Requests\UpdateStudentCouncilRequest;
use App\Models\StudentCouncil;

class StudentCouncilController extends Controller
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
     * @param  \App\Http\Requests\StoreStudentCouncilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentCouncilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentCouncil  $studentCouncil
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCouncil $studentCouncil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentCouncil  $studentCouncil
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCouncil $studentCouncil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentCouncilRequest  $request
     * @param  \App\Models\StudentCouncil  $studentCouncil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentCouncilRequest $request, StudentCouncil $studentCouncil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentCouncil  $studentCouncil
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCouncil $studentCouncil)
    {
        //
    }
}
