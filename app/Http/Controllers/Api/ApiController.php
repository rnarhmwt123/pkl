<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Tracking;
use Validator;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    //
    public function index()
    {
      $positive = DB::table('trackings')
            ->sum('trackings.positive');

        $sembuh = DB::table('trackings')
            ->sum('trackings.sembuh');

        $meninggal = DB::table('trackings')
            ->sum('trackings.meninggal');        

            $this->data = [
              'name' => 'Indonesia',
              'positif' => $positive,
              'sembuh' => $sembuh,
              'meninggal' => $meninggal,
          ];
  
          $data = [
              'success' => true,
              'data' => $this->data,
              'message' => 'berhasil',
          ];
          return response()->json($data, 200);
      }
            
          

    public function rw()
    {
    $tracking = DB::table('trackings')
      ->select([
          DB::raw('SUM(sembuh) as sembuh'),
          DB::raw('SUM(positive) as positive'),
          DB::raw('SUM(meninggal) as meninggal'),
          DB::raw('SUM(tanggal) as tanggal'),
      ])
      ->groupBy('tanggal')
      ->get();

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

      return response([
        'success' => true,
        'data' => [
          'hari ini' =>  $tracking,
          'total' => [
            'Jumlah Sembuh' => $sembuh,
            'Jumlah Positive'   => $positive,
            'Jumlah meninggal'=> $meninggal,
          ],
        ],
        'message' => 'berhasil',
    ],200);

    }

    public function provinsi()
    {
      $provinsi = DB::table('provinsis')
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

            $today = DB::table('provinsis')
            ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->whereDate('trackings.tanggal',Carbon::today())
            ->groupBy('provinsis.id')->get();
       
            $sembuh = DB::table('provinsis')
            ->select('trackings.sembuh',
            'trackings.positive','trackings.meninggal')
            ->join('kotas','provinsis.id','=','kotas.id_provinsi')
            ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
            ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
            ->join('rws','kelurahans.id','=','rws.id_kelurahan')
            ->join('trackings','rws.id','=','trackings.id_rw')
            ->sum('trackings.sembuh');

            $positive = DB::table('provinsis')
            ->select('trackings.sembuh',
            'trackings.positive','trackings.meninggal')
            ->join('kotas','provinsis.id','=','kotas.id_provinsi')
            ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
            ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
            ->join('rws','kelurahans.id','=','rws.id_kelurahan')
            ->join('trackings','rws.id','=','trackings.id_rw')
            ->sum('trackings.positive');

            $meninggal = DB::table('provinsis')
            ->select('trackings.sembuh',
            'trackings.positive','trackings.meninggal')
            ->join('kotas','provinsis.id','=','kotas.id_provinsi')
            ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
            ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
            ->join('rws','kelurahans.id','=','rws.id_kelurahan')
            ->join('trackings','rws.id','=','trackings.id_rw')
            ->sum('trackings.meninggal'); 

           
            return response([
              'success' => true,
              'data' => ['Data provinsi' => $provinsi,
              'total' => [
                [
                'Jumlah Sembuh' => $sembuh,
                'Jumlah Positive' => $positive,
                'Jumlah Meninggal' => $meninggal,
              ],
              'hari ini' => $today
                        ],
                      ],
              'message' => 'Berhasil'
          ], 200);       
        }
          public function provinsiid($id)
          {
            $provinsiid = DB::table('provinsis')
                  ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
                  DB::raw('SUM(trackings.sembuh) as Sembuh'),
                  DB::raw('SUM(trackings.positive) as Positive'),
                  DB::raw('SUM(trackings.meninggal) as Meninggal'))
                      ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                      ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                      ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                      ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                      ->join('trackings','rws.id','=','trackings.id_rw')
                  ->where('provinsis.id',$id)->get();

                  $provinsiid= Provinsi::whereId($id)->first();

                  return response([
                    'success' => true,
                    'data' => ['Data provinsi' => $provinsiid,
                              ],
                   
                    'message' => 'Berhasil'
                ], 200);       
              
          }

          public function kota()
          {
            $kota = DB::table('kotas')
            ->select('provinsis.nama_provinsi','kotas.kode_kota','kotas.nama_kota',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
            ->groupBy('kotas.id')->get();

            $today = DB::table('kotas')
            ->select('provinsis.nama_provinsi','kotas.kode_kota','kotas.nama_kota',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->whereDate('trackings.tanggal',Carbon::today())
            ->groupBy('kotas.id')->get();

          return response([
                'success' => true,
                'data' => ['Data Kota' => $kota,
                          ],
                'hari ini' => $today,          
               
                'message' => 'Berhasil'
            ], 200);      
          } 

          public function kotaid($id)
          {
            $kota = DB::table('kotas')
            ->select('provinsis.nama_provinsi','kotas.kode_kota','kotas.nama_kota',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('provinsis','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->where('kotas.id',$id)->get();

            $kotaid= Kota::whereId($id)->first();

          return response([
                'success' => true,
                'data' => ['Data kota' => $kotaid,
             
                          ],
               
                'message' => 'Berhasil'
            ], 200);      
          } 

          public function kecamatan()
          {
            $kecamatan = DB::table('kecamatans')
            ->select('kotas.nama_kota','kecamatans.kode_kecamatan','kecamatans.nama_kecamatan',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
            ->groupBy('kecamatans.id')->get();

            $today = DB::table('kecamatans')
            ->select('kotas.nama_kota','kecamatans.kode_kecamatan','kecamatans.nama_kecamatan',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->whereDate('trackings.tanggal',Carbon::today())
            ->groupBy('kecamatans.id')->get();


          return response([
                'success' => true,
                'data' => ['Data Kecamatan' => $kecamatan,
                          ],
                'hari ini ' => $today,          
               
                'message' => 'Berhasil'
            ], 200);      
          }

          public function kecamatanid($id)
          {
            $kecamatanid = DB::table('kecamatans')
            ->select('kotas.nama_kota','kecamatans.kode_kecamatan','kecamatans.nama_kecamatan',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kotas','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->where('kecamatans.id',$id)->get();

                $kecamatanid= Kecamatan::whereId($id)->first();

          return response([
                'success' => true,
                'data' => ['Data kecamatan' => $kecamatanid,
             
                          ],
               
                'message' => 'Berhasil'
            ], 200);      
          }


          public function kelurahan()
          {
            $kelurahan = DB::table('kelurahans')
            ->select('kecamatans.nama_kecamatan','kelurahans.nama_kelurahan',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kecamatans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
            ->groupBy('kelurahans.id')->get();

            $today = DB::table('kelurahans')
            ->select('kecamatans.nama_kecamatan','kelurahans.nama_kelurahan',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kecamatans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->whereDate('trackings.tanggal',Carbon::today())
            ->groupBy('kelurahans.id')->get();  

            return response([
              'success' => true,
              'data' => ['Data kelurahan' => $kelurahan,
                        ],
              'hari ini' => $today,
             
              'message' => 'Berhasil'
          ], 200);    

          }

          
          public function kelurahanid($id)
          {
            $kelurahanid = DB::table('kelurahans')
            ->select('kecamatans.nama_kecamatan','kelurahans.nama_kelurahan',
            DB::raw('SUM(trackings.sembuh) as Sembuh'),
            DB::raw('SUM(trackings.positive) as Positive'),
            DB::raw('SUM(trackings.meninggal) as Meninggal'))
                ->join('kecamatans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('trackings','rws.id','=','trackings.id_rw')
                ->where('kelurahans.id',$id)->get();

                $kelurahanid= Kelurahan::whereId($id)->first();

            return response([
              'success' => true,
              'data' => ['Data kelurahan' => $kelurahanid,
           
                        ],
             
              'message' => 'Berhasil'
          ], 200);    

          }

          public function sembuh()
          {
      
            $sembuh = DB::table('rws')
                    ->select('trackings.sembuh')
                    ->join('trackings','rws.id','=','trackings.id_rw')
                    ->sum('trackings.sembuh');

                    $res = [
                      'success'         => true,
                      'Data'            => 'Data kasus Sembuh Indonesia',
                      'value' => $sembuh,
                    
                ];
                return response()->json($res,200);
                 
              }
              public function positive()
              {
          
                $positive = DB::table('rws')
                        ->select('trackings.positive')
                        ->join('trackings','rws.id','=','trackings.id_rw')
                        ->sum('trackings.positive');
    
                        $res = [
                          'success'         => true,
                          'Data'            => 'Data kasus Positive Indonesia',
                          'value' => $positive,
                        
                    ];
                    return response()->json($res,200);
                  }
                  public function meninggal()
                  {
              
                    $meninggal = DB::table('rws')
                            ->select('trackings.meninggal')
                            ->join('trackings','rws.id','=','trackings.id_rw')
                            ->sum('trackings.meninggal');
        
                            $res = [
                              'success'         => true,
                              'Data'            => 'Data kasus meninggal Indonesia',
                              'value' => $meninggal,
                            
                        ];
                        return response()->json($res,200);
                      }
      public function tanggal()
      {
        $tracking = Tracking::get('created_at')->last();
        $positive = Tracking::where('tanggal',date('Y-m-d'))->sum('positive');
        $sembuh = Tracking::where('tanggal',date('Y-m-d'))->sum('sembuh');
        $meninggal = Tracking::where('tanggal',date('Y-m-d'))->sum('meninggal');

        $join = DB::table('trackings')
                ->select('positive','sembuh','meninggal')
                ->join('rws','trackings.id_rw','=','rws.id')
                ->get();

                $data1 = [
                  'positive' =>$join->sum('positive'),
                  'sembuh'   =>$join->sum('sembuh'),
                  'meninggal' =>$join->sum('meninggal'),
                ];
                $data2 =[
                  'positive' =>$positive,
                  'sembuh' =>$sembuh,
                  'meninggal' =>$meninggal,
                ];
                  $res = [
                    'success'         => true,
                    'Data'            => [
                      'hari ini' => $data2,
                      'total' => $data1,
                    ],
                    'message'            => 'berhasil',
                  
              ];
              return response()->json($res,200);
      }       

      public $data = [];
      public function global()
      {
        $response = Http::get('https://api.kawalcorona.com/')->json();

        foreach ($response as $data => $val) {
          $raw = $val['attributes'];
          $res = [
            'Negara' => $raw['Country_Region'],
            'Positive' => $raw['Confirmed'],
            'Sembuh' => $raw['Recovered'],
            'Meninggal' => $raw['Deaths']
          ];
          array_push ($this->data, $res);
        }

        $data = [
          'success' => true,
          'data' => $this->data,
          'message' => 'Berhasil',
        ];
        return response()->json($data,200);
     
      }
}