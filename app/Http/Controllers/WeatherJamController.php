<?php

namespace App\Http\Controllers;

use App\Models\WeatherJam;
use App\Http\Requests\StoreWeatherJamRequest;
use App\Http\Requests\UpdateWeatherJamRequest;

class WeatherJamController extends Controller
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
     * @param  \App\Http\Requests\StoreWeatherJamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeatherJamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeatherJam  $weatherJam
     * @return \Illuminate\Http\Response
     */
    public function show(WeatherJam $weatherJam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeatherJam  $weatherJam
     * @return \Illuminate\Http\Response
     */
    public function edit(WeatherJam $weatherJam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeatherJamRequest  $request
     * @param  \App\Models\WeatherJam  $weatherJam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeatherJamRequest $request, WeatherJam $weatherJam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeatherJam  $weatherJam
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeatherJam $weatherJam)
    {
        //
    }
}
