@extends('layouts.master')
@section('konten')
    <!-- Main content -->



    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-navy">

                <div class="card-header">
                    <a href="{{ route('transaksi.index') }}" class="btn btn-primary btn-sm" id="btn-tambah"><i
                            class="fa fa-backward"></i></a>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <label for="nama_produk">Cari</label>
                            <form {{ route('produk.cari', $produk->id) }} action="simple-results.html">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg"
                                        placeholder="Type your keywords here">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form id="form-tambah-edit" enctype="multipart/form-data">
                                <input type="hidden" name="id" class="form-control" id="id">
                                <div class="form-group">
                                    <label for="kode_produk">Kode Produk</label>
                                    <input type="text" name="kode_produk" id="kode_produk" class="form-control"
                                        placeholder="Masukkan Kode Produk">
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                        placeholder="Masukkan Kode">
                                </div>
                                {{-- <div class="form-group">
                                <label>Satuan</label>
                                <select id="satuan_id" name="satuan_id" class="form-control select2"
                                    style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($satuan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_satuan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <select id="jenis_id" name="jenis_id" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($jenis as $item)
                                        <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                                    @endforeach
                                </select>
                            </div> --}}


                                <div class="form-group">
                                    <label for="tgl_masuk">Tanggal Masuk</label>
                                    <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control"
                                        placeholder="Masukkan Tanggal Masuk">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_exp">Tanggal Exp</label>
                                    <input type="date" name="tgl_exp" id="tgl_exp" class="form-control"
                                        placeholder="Masukkan Tanggal Exp">
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah</label>
                                    <input type="text" name="jml" id="jml" class="form-control"
                                        placeholder="Masukkan Jumlah">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" name="harga" id="harga" class="form-control"
                                        placeholder="Masukkan Harga">
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="btn-simpan">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
