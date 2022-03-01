@extends('layouts.master')
@section('konten')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $admin }}</h3>

                    <p>User Admin</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">User Admin<i class=""></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $apoteker }}<sup style="font-size: 20px"></sup></h3>

                    <p> User Apoteker</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-circle"></i>
                </div>
                <a href="#" class="small-box-footer">User Apoteker<i class=""></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $kasir }}</h3>

                    <p>User Kasir</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-friends"></i>
                </div>
                <a href="#" class="small-box-footer">User Kasir<i class=""></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $transaksi }}</h3>

                    <p>Transaksi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-pen"></i>
                </div>
                <a href="#" class="small-box-footer">Transaksi<i class=""></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

@endsection
@section('scripts')
    <script>
        $('#dash').addClass('active');
    </script>
@endsection
