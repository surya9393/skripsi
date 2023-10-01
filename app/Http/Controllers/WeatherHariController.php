<?php

namespace App\Http\Controllers;

use App\Models\WeatherHari;
use App\Http\Requests\StoreWeatherHariRequest;
use App\Http\Requests\UpdateWeatherHariRequest;

class WeatherHariController extends Controller
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
     * @param  \App\Http\Requests\StoreWeatherHariRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeatherHariRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeatherHari  $weatherHari
     * @return \Illuminate\Http\Response
     */
    public function show(WeatherHari $weatherHari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeatherHari  $weatherHari
     * @return \Illuminate\Http\Response
     */
    public function edit(WeatherHari $weatherHari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeatherHariRequest  $request
     * @param  \App\Models\WeatherHari  $weatherHari
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeatherHariRequest $request, WeatherHari $weatherHari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeatherHari  $weatherHari
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeatherHari $weatherHari)
    {
        //
    }
}
