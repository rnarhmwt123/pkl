@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Rw</div>

                <div class="card-body">
                    <form action="{{route('rw.update',$rw->id)}}" method="post">
                    @csrf
                    @method('PATCH')
    
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Kelurahan</label>
                            <select name="id_kelurahan" class="form-control" id="exampleFormControlSelect1">
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_kelurahan == $rw->kelurahan->nama_kelurahan)
                                selected
                                @endif
                                >
                                {{$data->nama_kelurahan}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Rw</label>
                            <input type="text" name="rw" value = "{{$rw->rw}}"class="form-control" required>
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
