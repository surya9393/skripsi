<?php
   
namespace App\Http\Controllers;

use App\Models\MonitoringPower;
use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $voltage = DB::table('monitorings')->orderBy('id', 'ASC')->limit(1)->get();
        $weather = Weather::orderBy('id', 'ASC')->limit(1)->get();
        $percentage = 15;
        $voltages = DB::table('monitorings')->limit(19)->get();


        foreach($voltages as $voltager){
            $data['label'][] = $voltager->created_at;
            $data['data_dinamis'][] = $voltager->tegangan_dinamis;
            $data['data_statis'][] = $voltager->tegangan_statis;
            $data['power_statis'][] = $voltager->power_statis;
            $data['power_dinamis'][] = $voltager->power_dinamis;
        }
        $test = json_encode($data);
        return view('surya.home')->with(compact('voltage', 'percentage', 'test', 'weather'));
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     public function adminExpo()
     {
         $voltage = MonitoringPower::avg('tegangan_dinamis');
         $current = MonitoringPower::avg('arus_dinamis');
         $power_avg = MonitoringPower::avg('power_dinamis');
         // $power = MonitoringPower::sum('power_dinamis');
 
         $percentage = 15;
         // $voltages = MonitoringPower::limit(60)->get();
 
         $power = DB::table('tabel_forecast')->where('id',1)->get();
         
         foreach($power as $data_power){
             $datarealpower['label']= $data_power->watt_panel;
         }
         $powerfix = $datarealpower['label'];
 
         $arus = DB::table('monitorings')->limit(19)->get();
 
         foreach($arus as $data_arus){
             $datareal['label'][] = $data_arus->created_at;
             $datareal['data_tegangan'][] = $data_arus->tegangan_dinamis;
             $datareal['data_arus'][] = $data_arus->arus_dinamis;
         }
         $tester = json_encode($datareal);
         
         $voltages = DB::table('tabel_forecast')->get();
 
         foreach($voltages as $voltager){
             $data['label'][] = $voltager->created_at;
             $data['data_real'][] = $voltager->watt_panel;
             $data['data_forecast'][] = $voltager->watt_forecast;
         }
         $test = json_encode($data);
         return view('ghina.adminExpo')->with(compact('voltage', 'percentage', 'test', 'current', 'power', 'power_avg', 'tester', 'powerfix'));
     }

    public function adminHome()
    {
        $voltage = MonitoringPower::avg('tegangan_dinamis');
        $current = MonitoringPower::avg('arus_dinamis');
        $power_avg = MonitoringPower::avg('power_dinamis');
        // $power = MonitoringPower::sum('power_dinamis');

        $percentage = 15;
        // $voltages = MonitoringPower::limit(60)->get();

        $power = DB::table('tabel_forecast')->where('id',1)->get();
        
        foreach($power as $data_power){
            $datarealpower['label']= $data_power->watt_panel;
        }
        $powerfix = $datarealpower['label'];

        $arus = DB::table('monitorings')->limit(19)->get();

        foreach($arus as $data_arus){
            $datareal['label'][] = $data_arus->created_at;
            $datareal['data_tegangan'][] = $data_arus->tegangan_dinamis;
            $datareal['data_arus'][] = $data_arus->arus_dinamis;
        }
        $tester = json_encode($datareal);
        
        $voltages = DB::table('tabel_forecast')->get();

        foreach($voltages as $voltager){
            $data['label'][] = $voltager->created_at;
            $data['data_real'][] = $voltager->watt_panel;
            $data['data_forecast'][] = $voltager->watt_forecast;
        }
        $test = json_encode($data);
        return view('ghina.adminHome')->with(compact('voltage', 'percentage', 'test', 'current', 'power', 'power_avg', 'tester', 'powerfix'));
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        $voltage = DB::table('data_load')->avg('voltage');
        $current = DB::table('data_load')->avg('current');
        $power_avg = DB::table('data_load')->avg('power');
        $power = DB::table('data_load')->avg('energy');
        $percentage = 15;
        // $voltages = MonitoringPower::limit(60)->get();

        $voltages = DB::table('data_load')->get();

        foreach($voltages as $voltager){
            $data['label'][] = $voltager->time;
            $data['data_voltage'][] = $voltager->voltage;
            $data['data_current'][] = $voltager->current;
            $data['data_power'][] = $voltager->power;
            $data['data_energy'][] = $voltager->energy;
        }
        $test = json_encode($data);
        return view('dila.managerHome')->with(compact('voltage', 'percentage', 'test', 'current', 'power', 'power_avg'));
    }

    public function dilaTable()
    {
        $voltage = MonitoringPower::avg('tegangan_dinamis');
        $current = MonitoringPower::avg('arus_dinamis');
        $power_avg = MonitoringPower::avg('power_dinamis');
        $power = MonitoringPower::sum('power_dinamis');
        $percentage = 15;
        // $voltages = MonitoringPower::limit(60)->get();

        $voltages = DB::table('data_load')->get();

        foreach($voltages as $voltager){
            $data['label'][] = $voltager->time;
            $data['data_voltage'][] = $voltager->voltage;
            $data['data_current'][] = $voltager->current;
            $data['data_power'][] = $voltager->power;
            $data['data_energy'][] = $voltager->energy;
        }
        $test = json_encode($data);
        return view('dila.table')->with(compact('voltage', 'percentage', 'test', 'current', 'power', 'power_avg'));
    }
}
