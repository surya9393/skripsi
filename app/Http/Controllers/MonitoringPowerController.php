<?php

namespace App\Http\Controllers;

use App\Models\MonitoringPower;
use App\Http\Requests\StoreMonitoringPowerRequest;
use App\Http\Requests\UpdateMonitoringPowerRequest;

class MonitoringPowerController extends Controller
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
     * @param  \App\Http\Requests\StoreMonitoringPowerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonitoringPowerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MonitoringPower  $monitoringPower
     * @return \Illuminate\Http\Response
     */
    public function show(MonitoringPower $monitoringPower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonitoringPower  $monitoringPower
     * @return \Illuminate\Http\Response
     */
    public function edit(MonitoringPower $monitoringPower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonitoringPowerRequest  $request
     * @param  \App\Models\MonitoringPower  $monitoringPower
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonitoringPowerRequest $request, MonitoringPower $monitoringPower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonitoringPower  $monitoringPower
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonitoringPower $monitoringPower)
    {
        //
    }
}
