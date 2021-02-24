<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
//api provinsi
Route::get('provinsi/index', [ProvinsiController::class, 'index']);
Route::post('provinsi/store', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);

//count indonesia
Route::get('index', [ApiController::class, 'index']);

//count rw
Route::get('rw', [ApiController::class, 'rw']);
//route provinsi
Route::get('provinsi', [ApiController::class, 'provinsi']);
Route::get('provinsi/{id}', [ApiController::class, 'provinsiid']);
//route kota
Route::get('kota', [ApiController::class, 'kota']);
Route::get('kota/{id}', [ApiController::class, 'kotaid']);
//route kecamatan
Route::get('kecamatan', [ApiController::class, 'kecamatan']);
Route::get('kecamatan/{id}', [ApiController::class, 'kecamatanid']);
//route kelurahannnnn
Route::get('kelurahan', [ApiController::class, 'kelurahan']);
Route::get('kelurahan/{id}', [ApiController::class, 'kelurahanid']);
//route sembuh
Route::get('sembuh', [ApiController::class, 'sembuh']);
//route positive
Route::get('positive', [ApiController::class, 'positive']);
//route meninggal
Route::get('meninggal', [ApiController::class, 'meninggal']);
//route tanggal
Route::get('tanggal', [ApiController::class, 'tanggal']);
//route global
Route::get('global', [ApiController::class, 'global']);












