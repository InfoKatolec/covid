<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Notifications\Notifiable;

class MonitoringController extends Controller
{
	use Notifiable;

	  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('monitoring.index');
    }
    public function store(Request $req)
    {
    	$model = User::find(Auth::user()->id);
    	$model->name = $req->name;
    	$model->nik = $req->nik;
    	$model->section = $req->section;
    	$model->tanggal = $req->tanggal;
    	$model->suhu = $req->suhu;
    	$model->sakit_tenggorokan = $req->sakit_tenggorokan;
    	$model->shift = $req->shift;
    	$model->no_hp = $req->no_hp;
    	$model->batuk = $req->batuk;
    	$model->pilek = $req->pilek;
    	$model->sesak_nafas = $req->sesak_nafas;
    	$model->diare = $req->diare;
    	$model->rasa = $req->rasa;
    	$model->penciuman = $req->penciuman;
    	$model->save();
    	return redirect()->route('dataMonitoring')->with('message','Successfully Added!');
    }

    public function data()
    {
    	$data = User::get();
    	return view('monitoring.data',compact('data'));
    }
    public function dataDetail($id)
    {
    	$data = User::find($id);
    	return view('monitoring.dataDetail', compact('data'));
    }
}
