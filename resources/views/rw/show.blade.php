@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Rw</div>

                <div class="card-body">

                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" value="{{$rw->kelurahan->nama_kelurahan}}" name="nama_kelurahan" class="form-control"                                                                 >
                        </div>
                        
                        <div class="form-group">
                            <label>rw</label>
                            <input type="text" name="rw" value="{{$rw->rw}}"
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
