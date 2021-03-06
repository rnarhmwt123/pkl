@extends('layouts.master')
@section('css')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RW') }}</div>

              
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Daftar Rw
               
                <a href="{{route('rw.create')}}"
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
                                    <th>Nama Kelurahan</th>
                                    <th>RW </th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $no = 1; @endphp
                                @foreach($rw as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kelurahan->nama_kelurahan}}</td>                                  
                                    <td>{{ $data->rw}}</td>
                                    <td>
                            
                                    </td>
                                    <form action="{{route('rw.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{route('rw.show',$data->id)}}" class="btn btn-info"> Show</a>
                                    </td>
                                    <td>
                                        <a href="{{route('rw.edit',$data->id)}}" class="btn btn-success"> Edit</a>
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
