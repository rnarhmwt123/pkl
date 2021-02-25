<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Tracking;
use App\Models\Rw;
use DB;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    //
    public function index()
    {
     $sembuh = DB::table('trackings')
              ->sum('sembuh');
     $positive = DB::table('trackings')
              ->sum('positive');
    $meninggal = DB::table('trackings')
              ->sum('meninggal');  

              $data = [];
                $response = Http::get('https://api.kawalcorona.com/')->json();
                foreach ($response as $datal) {
                  $data[] = [
                    'Negara' => $datal['attributes']['Country_Region'],
                    'Positive' => $datal['attributes']['Confirmed'],
                    'Sembuh' => $datal['attributes']['Recovered'],
                    'Meninggal' => $datal['attributes']['Deaths']
                  ];
                }
 
    $tampil = DB::table('provinsis')
            ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
            ->groupBy('provinsis.id')->get();

            

            return view('frontend', compact('sembuh','positive','meninggal','tampil','data'));
    }

    

    
}
