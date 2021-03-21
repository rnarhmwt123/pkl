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
        $positive = DB::table('trackings')->sum('trackings.positive');
        $sembuh = DB::table('trackings')->sum('trackings.sembuh');
        $meninggal = DB::table('trackings')->sum('trackings.meninggal');
        return view("layouts.dasbor.index", compact('positive','sembuh', 'meninggal'));

    }
}
