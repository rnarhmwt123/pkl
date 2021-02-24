@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kecamatan</div>

                <div class="card-body">
                    <form action="{{route('kecamatan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label>Nama Kota</label>
                            <select name="id_kota" class="form-control">
                                @foreach($kota as $data)
                                <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>kode kecamatan</label>
                            <input type="text" name="kode_kecamatan" class="form-control" value="{{@old('kode_kecamatan')}}" >
                            @error('kode_kecamatan')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control" value="{{@old('nama_kecamatan')}}">
                            @error('nama_kecamatan')
                            {{ $message }}
                            @enderror
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
