@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kota</div>

                <div class="card-body">
                    <form action="{{route('kota.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label>Nama Provinsi</label>
                            <select name="id_provinsi" class="form-control" required>
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>kode kota</label>
                            <input type="text" name="kode_kota" class="form-control" value="{{@old('kode_kota')}}">
                            @error('kode_kota')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Kota</label>
                            <input type="text" name="nama_kota" class="form-control" value="{{@old('nama_kota')}}">
                            @error('nama_kota')
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
