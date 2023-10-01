<?php

namespace App\Http\Livewire;

use App\Models\MonitoringPower as monitor;
use App\Models\Weather;
use Carbon\Carbon;
use Livewire\Component;

class MonitoringPower extends Component
{
    public $voltages;
    protected $listeners = ['updateData' => 'changeData'];
    public function mount()
    {
        
        $voltages = monitor ::limit(59)->get();
        foreach($voltages as $voltage){
            $data['label'][] = $voltage->created_at->format('H:i');
            $data['data_dinamis'][] = $voltage->tegangan_dinamis;
            $data['data_statis'][] = $voltage->tegangan_statis;
            $data['arus_dinamis'][] = $voltage->arus_dinamis;
            $data['arus_statis'][] = $voltage->arus_statis;
            $data['power_dinamis'][] = $voltage->power_dinamis;
            $data['power_statis'][] = $voltage->power_statis;
        }
        $this->voltages = json_encode($data);
        // dd($this->voltages);
    }
    
    public function render()
    {
        return view('livewire.monitoring-power')->extends('layouts.master')->section('content');
    }

    public function changeData()
    {

        $voltages = monitor ::limit(59)->get();
        foreach($voltages as $voltage){
            $data['label'][] = $voltage->created_at->format('H:i');
            $data['data_dinamis'][] = $voltage->tegangan_dinamis;
            $data['data_statis'][] = $voltage->tegangan_statis;
            $data['arus_dinamis'][] = $voltage->arus_dinamis;
            $data['arus_statis'][] = $voltage->arus_statis;
            $data['power_dinamis'][] = $voltage->power_dinamis;
            $data['power_statis'][] = $voltage->power_statis;
        }
        $this->voltages = json_encode($data);
        $this->emit('berhasilUpdate', ['data' => $this->voltages]);
    }
}
