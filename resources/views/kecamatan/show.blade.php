@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kecamatan</div>

                <div class="card-body">

                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" value="{{$kecamatan->kota->nama_kota}}" name="nama_kota" class="form-control"                                                                 >
                        </div>
                        
                        <div class="form-group">
                            <label>Kode Kecamatan</label>
                            <input type="text" name="kode_kecamatan" value="{{$kecamatan->kode_kecamatan}}"
                             class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}"
                             class="form-control" readonly>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <a href="{{ url()->previous() }}" type="submit" class="btn btn-primary">Kembali</a>
                        </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
