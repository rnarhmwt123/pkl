@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kota</div>

                <div class="card-body">
                    <form action="{{route('kota.update',$kota->id)}}" method="post">
                    @csrf
                    @method('PATCH')
    
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Provinsi</label>
                            <select name="id_provinsi" class="form-control" id="exampleFormControlSelect1">
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_provinsi == $kota->provinsi->nama_provinsi)
                                selected
                                @endif
                                >
                                {{$data->nama_provinsi}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Kode Kota</label>
                            <input type="text" name="kode_kota" value = "{{$kota->kode_kota}}"class="form-control" required>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Kota</label>
                            <input type="text" name="nama_kota" value = "{{$kota->nama_kota}}"class="form-control" required>
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
