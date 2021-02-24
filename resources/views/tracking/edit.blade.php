@extends('layouts.app')
@section('css')
@endsection
@section('js')
@section('content')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('tracking.update', $tracking->id)}}" class="form-horizontal m-t-30" method="post">
                            @csrf
                            @method('put')
                            @livewire('tracking-data',['selectedRw' => $tracking->id_rw, 'idt' => $tracking->id])
                            <div class="form-group">
                            <button type="submit" class="btn btn-info">edit</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection