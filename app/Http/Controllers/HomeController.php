<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
     // AREA CHART
        $api = url('/chart-line-ajax');
   
        $chart = new CovidChart;
        $chart->labels(['','Sakit Tenggorokan','Batuk','Pilek','Sesak Nafas','Diare','Indra Perasa','Indra Penciuman'])->load($api);
    // PIE CHART
         $suspects = User::get();
        
        $labels = $suspects->flatten(1)->pluck('suhu');
        $data   = $suspects->flatten(1)->pluck('suhu');
        $colors = $labels->map(function($item) {
            return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chartPie = new CovidChart;
        $chartPie->labels([34.5 ."-". 35, 35 ."-". 35.5, 35.5 ."-". 36, 36 ."-". 36.5, 36.5 ."-". 37]);
        $chartPie->dataset('Kasus Positif', 'pie', $data)->backgroundColor($colors);

        return view('dashboard',compact('chart','chartPie'));
    }


     public function chartLineAjax(Request $request)
    {
        $year = $request->has('year') ? $request->year : date('Y');
        
        $sakit_tenggorokan = User::where('sakit_tenggorokan','Ya')
                    ->count();
        $batuk = User::where('batuk','Ya')
                    ->count();
        $pilek = User::where('pilek','Ya')
                    ->count();
        $sesak_nafas = User::where('sesak_nafas','Ya')
                    ->count();
        $diare = User::where('diare','Ya')
                    ->count();
        $rasa = User::where('rasa','Merasa')
                    ->count();
        $penciuman = User::where('penciuman','Merasa')
                    ->count();
  
        $chart = new CovidChart;
        $chart->dataset('Total Karyawan', 'line', [0,$sakit_tenggorokan, $batuk, $pilek, $sesak_nafas, $diare, $rasa, $penciuman])->options([
                    'fill' => 'true',
                    'borderColor' => '#51C1C0'
                ]);
  
        return $chart->api();
    }

    public function chartPieAjax(Request $request)
    {
        
    }
}
