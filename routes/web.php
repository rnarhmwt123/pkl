<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\ReportController;

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

Route::resource('/', Reportcontroller::class,);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::view('/test', 'admin.index');
// Route::group(['middleware' => ['auth']],
//             function () {
//                 Route::get('/', function()
//                 {
//                     return view('layouts.master');
//                 });

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('home');


                Route::resource('/provinsi', Provinsicontroller::class);
               
                Route::resource('/kota', Kotacontroller::class);
              
                Route::resource('/kecamatan', Kecamatancontroller::class);
                
                Route::resource('/kelurahan', Kelurahancontroller::class);

                Route::resource('/rw', Rwcontroller::class);
        
                Route::resource('/tracking', Trackingcontroller::class);


              
                
        // });