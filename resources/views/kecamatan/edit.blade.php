@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kecamatan</div>

                <div class="card-body">
                    <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="post">
                    @csrf
                    @method('PATCH')
    
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Provinsi</label>
                            <select name="id_kota" class="form-control" id="exampleFormControlSelect1">
                                @foreach($kota as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_kota == $kecamatan->kota->nama_kota)
                                selected
                                @endif
                                >
                                {{$data->nama_kota}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Kode kecamatan</label>
                            <input type="text" name="kode_kecamatan" value = "{{$kecamatan->kode_kecamatan}}"class="form-control" required>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" value = "{{$kecamatan->nama_kecamatan}}"class="form-control" required>
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
