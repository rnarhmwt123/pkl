@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Siswa</div>

                <div class="card-body">
                    <form action="{{route('provinsi.update',$provinsi->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    
                        <div class="form-group">
                            <label>kode Provinsi</label>
                            <input type="text" name="kode_provinsi" value= "{{$provinsi->kode_provinsi}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Provinsi</label>
                            <input type="text" name="nama_provinsi" value = "{{$provinsi->nama_provinsi}}"class="form-control" required>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
