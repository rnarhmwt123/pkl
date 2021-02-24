<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Tracking;
use Illuminate\Http\Request;
use DB;


class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tracking = tracking::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return view('tracking.index',compact('tracking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('tracking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sembuh' => 'required',
            'positive' => 'required',
            'meninggal' => 'required',
        ], [
            'sembuh.required' => 'Sembuh harus di isi',
            'positive.required' => 'positive  harus di isi',
            'meninggal.required' => 'meninggal harus di isi',
            ]);

        //
        $tracking = new Tracking;
        $tracking ->id_rw = $request->id_rw;
        $tracking ->sembuh = $request->sembuh;
        $tracking ->positive = $request->positive;
        $tracking ->meninggal = $request->meninggal;
        $tracking ->tanggal = $request->tanggal;
        $tracking ->save();
        return redirect()->route('tracking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $tracking)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tracking = Tracking::findOrFail($id);
        return view('tracking.edit',compact('tracking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $tracking = Tracking::findOrFail($id);
        $tracking ->id_rw = $request->id_rw;
        $tracking ->sembuh = $request->sembuh;
        $tracking ->positive = $request->positive;
        $tracking ->meninggal = $request->meninggal;
        $tracking ->tanggal = $request->tanggal;
        $tracking ->save();
        return redirect()->route('tracking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tracking = Tracking::findOrFail($id);
        $tracking->delete();
        return redirect()->route('tracking.index');
    }
}
