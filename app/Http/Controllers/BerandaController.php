<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Tracking;
use App\Models\Rw;
use DB;

class BerandaController extends Controller
{
    //
    public function index()
    {
$sembuh = DB::table('rws')
        ->select('trackings.sembuh',
        'trackings.positive','trackings.meninggal')
        ->join('trackings','rws.id','=','trackings.id_rw')
        ->sum('trackings.sembuh');
$positive = DB::table('rws')
        ->select('trackings.sembuh',
        'trackings.positive','trackings.meninggal')
        ->join('trackings','rws.id','=','trackings.id_rw')
        ->sum('trackings.positive');
$meninggal = DB::table('rws')
        ->select('trackings.sembuh',
        'trackings.positive','trackings.meninggal')
        ->join('trackings','rws.id','=','trackings.id_rw')
        ->sum('trackings.meninggal');  

        return view('', compact('sembuh','positive','meninggal'));

    }
}
