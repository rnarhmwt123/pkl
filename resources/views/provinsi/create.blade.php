@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                <div class="card-body">
                    <form action="{{route('provinsi.store')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label>kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control" value="{{@old('kode_provinsi')}}" >
                        @error('kode_provinsi')
                        {{ $message }}
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" value="{{@old('nama_provinsi')}}" >
                            @error('kode_provinsi')
                            {{ $message }}
                            @enderror

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
