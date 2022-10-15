<?php

namespace App\Http\Controllers;

use App\Models\Readiness;
use App\Http\Requests\StoreReadinessRequest;
use App\Http\Requests\UpdateReadinessRequest;

class ReadinessController extends Controller
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
     * @param  \App\Http\Requests\StoreReadinessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReadinessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Readiness  $readiness
     * @return \Illuminate\Http\Response
     */
    public function show(Readiness $readiness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Readiness  $readiness
     * @return \Illuminate\Http\Response
     */
    public function edit(Readiness $readiness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReadinessRequest  $request
     * @param  \App\Models\Readiness  $readiness
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReadinessRequest $request, Readiness $readiness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Readiness  $readiness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Readiness $readiness)
    {
        //
    }
}
