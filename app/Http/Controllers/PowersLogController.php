<?php

namespace App\Http\Controllers;

use App\Models\PowersLog;
use App\Http\Requests\StorePowersLogRequest;
use App\Http\Requests\UpdatePowersLogRequest;

class PowersLogController extends Controller
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
     * @param  \App\Http\Requests\StorePowersLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePowersLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PowersLog  $powersLog
     * @return \Illuminate\Http\Response
     */
    public function show(PowersLog $powersLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PowersLog  $powersLog
     * @return \Illuminate\Http\Response
     */
    public function edit(PowersLog $powersLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePowersLogRequest  $request
     * @param  \App\Models\PowersLog  $powersLog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePowersLogRequest $request, PowersLog $powersLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PowersLog  $powersLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(PowersLog $powersLog)
    {
        //
    }
}
