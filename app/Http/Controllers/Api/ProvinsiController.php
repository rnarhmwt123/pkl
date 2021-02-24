<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use Validator;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $res =[
            'success' => true,
            'data' => $provinsi,
            'message' => 'berhasil'
        ];
        return response()->json($res);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ],[
            'kode_provinsi.required' => 'Masukan kode provinsi !',            
            'nama_provinsi.required' => 'Masukan nama provinsi !',
    
        ]
        );

        if($validator->fails()) {
            $res =[
                'success' => false,
                'data' => $validator->errors(),
                'message' => 'isi bidang yang kosong'
            ];
            return response()->json($res);

        } else {

            $provinsi = Provinsi::create([
                'kode_provinsi' => $request->input('kode_provinsi'),
                'nama_provinsi' => $request->input('nama_provinsi')
            ]);

            if($provinsi) {
                $res =[
                    'success' => true,
                    'message' => 'berhasil di simpan',
                ];
                return response()->json($res);
            } else {
                $res =[
                    'success' => false,
                    'message' => 'gagal di simpan',
                ];
                return response()->json($res);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if($provinsi) {
            $res =[
                'success' => true,
                'data' => $provinsi,
                'message' => 'detail provinsi'
            ];
            return response()->json($res);
        } else {
            $res =[
                'success' => true,
                'data' => '',
                'message' => 'data tidak di temukan'
            ];
            return response()->json($res);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi data
        $validator = Validator::make($request->all(),[
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ],
        [
            'kode_provinsi.required' => 'Masukan kode provinsi !',
            'nama_provinsi.required' => 'Masukan nama provinsi !', 
        ]

        );

        if($validator->fails()){
            $res =[
                'success' => false,
                'data' => $validator->errors(),
                'message' => 'Silahkan isi bidang yang kosong'
            ];
            return response()->json($res);

        } else {

            $provinsi = Provinsi::whereId($request->input('id'))->update([
                'kode_provinsi' => $request->input('kode_provinsi'),
                'nama_provinsi' => $request->input('nama_provinsi'),
            ]);

        if($provinsi) {
            $res =[
                'success' => true,
                'message' => 'Provinsi berhasil di update',
            ];
            return response()->json($res);
        } else {
            $res =[
                'success' => false,
                'message' => 'Provinsi gagal di update',
            ];
            return response()->json($res);
        }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if($provinsi) {
            $res =[
                'success' => true,
                'message' => 'Provinsi berhasil di hapus',
            ];
            return response()->json($res);
        } else {
            $res =[
                'success' => false,
                'message' => 'Provinsi gagal di hapus',
            ];
            return response()->json($res);
        }

    }
}
