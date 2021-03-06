<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Rw;
use Illuminate\Http\Request;
use DB;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index', compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelurahan = Kelurahan::all();
        return view('rw.create',compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'rw' => 'required',
        ], [
            'rw.required' => 'Rw  harus di isi',
        ]);


        $rw = new Rw();
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->rw = $request->rw;        
        $rw->save();
        return redirect()->route('rw.index')
        ->with(['message'=>'Data berhasil di buat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.show', compact('rw','kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();  
        return view('rw.edit', compact('rw','kelurahan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $rw = Rw ::findOrFail($id);
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->rw = $request->rw;
        $rw->save();
        return redirect()->route('rw.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index');
    }
}
