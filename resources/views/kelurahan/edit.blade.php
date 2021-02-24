@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelurahan</div>

                <div class="card-body">
                    <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="post">
                    @csrf
                    @method('PATCH')
    
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Kecamatan</label>
                            <select name="id_kecamatan" class="form-control" id="exampleFormControlSelect1">
                                @foreach($kecamatan as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_kecamatan == $kelurahan->kecamatan->nama_kecamatan)
                                selected
                                @endif
                                >
                                {{$data->nama_kecamatan}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Kelurahan</label>
                            <input type="text" name="nama_kelurahan" value = "{{$kelurahan->nama_kelurahan}}"class="form-control" required>
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
