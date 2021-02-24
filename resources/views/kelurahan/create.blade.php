@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kelurahan</div>

                <div class="card-body">
                    <form action="{{route('kelurahan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label>Nama kecamatan</label>
                            <select name="id_kecamatan" class="form-control">
                                @foreach($kecamatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama Kelurahan</label>
                            <input type="text" name="nama_kelurahan" class="form-control" value="{{@old('nama_kelurahan')}}">
                        </div>
                        @error('nama_kelurahan')
                            {{ $message }}
                        @enderror
                       

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
