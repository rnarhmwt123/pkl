@extends('layouts.master')
@section('css')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kecamatan') }}</div>

               
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Daftar Kecamatan
               
                <a href="{{route('kecamatan.create')}}"
                 class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </di v>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kota</th>
                                    <th>Kode kecamatan</th>
                                    <th>Nama Kecamatan </th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($kecamatan as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kota->nama_kota }}</td>                                  
                                    <td>{{ $data->kode_kecamatan }}</td>
                                    <td>{{ $data->nama_kecamatan }}</td>
                                    <td>
                            
                                    </td>
                                    <form action="{{route('kecamatan.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-info"> Show</a>
                                    </td>
                                    <td>
                                        <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-success"> Edit</a>
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
