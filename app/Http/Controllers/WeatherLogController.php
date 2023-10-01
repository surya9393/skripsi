<?php

namespace App\Http\Controllers;

use App\Models\WeatherLog;
use App\Http\Requests\StoreWeatherLogRequest;
use App\Http\Requests\UpdateWeatherLogRequest;

class WeatherLogController extends Controller
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
     * @param  \App\Http\Requests\StoreWeatherLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeatherLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeatherLog  $weatherLog
     * @return \Illuminate\Http\Response
     */
    public function show(WeatherLog $weatherLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeatherLog  $weatherLog
     * @return \Illuminate\Http\Response
     */
    public function edit(WeatherLog $weatherLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeatherLogRequest  $request
     * @param  \App\Models\WeatherLog  $weatherLog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeatherLogRequest $request, WeatherLog $weatherLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeatherLog  $weatherLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeatherLog $weatherLog)
    {
        //
    }
}
