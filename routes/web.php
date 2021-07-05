<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::prefix('monitoring')->group(function () {
	Route::get('/index',['as' => 'indexMonitoring', 'uses' => 'MonitoringController@index'])->middleware('auth');
	Route::post('/store',['as' => 'storeMonitoring', 'uses' => 'MonitoringController@store']);
	Route::get('/data',['as' => 'dataMonitoring', 'uses' => 'MonitoringController@data']);
	Route::get('/data/detail/{id}', 'MonitoringController@dataDetail');
});
Auth::routes();

Route::get('chart-line-ajax', 'HomeController@chartLineAjax');
Route::get('chart-pie-ajax', 'HomeController@chartPieAjax');

Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Auth::routes(['verify' => true]);
Route::get('/firebase','FirebaseController@index');
