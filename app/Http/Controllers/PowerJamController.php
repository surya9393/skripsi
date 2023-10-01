<?php

namespace App\Http\Controllers;

use App\Models\PowerJam;
use App\Http\Requests\StorePowerJamRequest;
use App\Http\Requests\UpdatePowerJamRequest;

class PowerJamController extends Controller
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
     * @param  \App\Http\Requests\StorePowerJamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePowerJamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PowerJam  $powerJam
     * @return \Illuminate\Http\Response
     */
    public function show(PowerJam $powerJam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PowerJam  $powerJam
     * @return \Illuminate\Http\Response
     */
    public function edit(PowerJam $powerJam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePowerJamRequest  $request
     * @param  \App\Models\PowerJam  $powerJam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePowerJamRequest $request, PowerJam $powerJam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PowerJam  $powerJam
     * @return \Illuminate\Http\Response
     */
    public function destroy(PowerJam $powerJam)
    {
        //
    }
}
