@extends('layouts.master')
@section('css')
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Provinsi') }}</div>

               
                
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Daftar Provinsi
               
                <a href="{{route('provinsi.create')}}"
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
                                    <th>Kode Provinsi</th>
                                    <th>Nama Provinsi </th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($provinsi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kode_provinsi }}</td>
                                    <td>{{ $data->nama_provinsi }}</td>
                                    <td>
                                        @foreach($data->kota as $value)
                                        <ul>
                                            <li>{{$value->nama}}</li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <form action="{{route('provinsi.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-info"> Show</a>
                                    </td>
                                    <td>
                                        <a href="{{route('provinsi.edit',$data->id)}}" class="btn btn-success"> Edit</a>
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

