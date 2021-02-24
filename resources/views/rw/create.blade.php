@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah RW</div>

                <div class="card-body">
                    <form action="{{route('rw.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                            <label>Nama Kelurahan</label>
                            <select name="id_kelurahan" class="form-control">
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw" class="form-control" value="{{@old('rw')}}">
                        </div>
                        @error('rw')
                            <div class='alert alert-danger'>{{ $message }}</div>
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
