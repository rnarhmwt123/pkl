@extends('layouts.master')
@section('css')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tracking') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in Tracking!') }}
                </div>
                 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Daftar Tracking
               
                <a href="{{route('tracking.create')}}"
                 class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Rw</th>
                                    <th>Sembuh</th>
                                    <th>Positive</th>
                                    <th>Meninggal</th>
                                    <th>Tanggal</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($tracking as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}</td>                         
                                    <td>{{$data->rw->rw}}</td>
                                    <td>{{$data->sembuh}}</td>
                                    <td>{{$data->positive}}</td>
                                    <td>{{$data->meninggal}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>
                                    </td>
                                    <form action="{{route('tracking.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                   
                                    <td>
                                        <a href="{{route('tracking.edit',$data->id)}}" class="btn btn-success"> Edit</a>
                                    </td>
                
                                    <td>
                                        <button type="submit" onclick="return confirm('Apakah anda yakin ?');"class="btn btn-danger">Delete</button>
                                    </td>
                                </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection