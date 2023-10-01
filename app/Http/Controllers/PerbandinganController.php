<?php

namespace App\Http\Controllers;

use App\Models\MonitoringPower;
use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    public function index()
    {        
        $voltages = MonitoringPower ::limit(59)->get();
        foreach($voltages as $voltage){
            $data['label'][] = $voltage->created_at->format('H:i');
            $data['data_dinamis'][] = $voltage->tegangan_dinamis;
            $data['data_statis'][] = $voltage->tegangan_statis;
            $data['arus_dinamis'][] = $voltage->arus_dinamis;
            $data['arus_statis'][] = $voltage->arus_statis;
            $data['power_dinamis'][] = $voltage->power_dinamis;
            $data['power_statis'][] = $voltage->power_statis;
        }
        $test = json_encode($data);
        return view('surya.perbandingan')->with(compact('test'));
    }
}
