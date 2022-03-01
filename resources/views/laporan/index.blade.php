@extends('layouts.master')
@section('konten')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-navy">
                <div class="card-header">
                    {{-- <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3> --}}
                    <a href="{{ route('laporan.cetak') }}" class="btn btn-warning btn-sm"><i class="fa fa-print"></i></a>

                </div>
                <div class="card-body">

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#litransaksi').addClass('menu-open');
        $('#menutransaksi').addClass('active');
        $('#laporan').addClass('active');
    </script>

@endsection
