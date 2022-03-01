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
                    {{-- <div class="col-md-6">
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
                    </div> --}}
                    <div class="col-md-6">
                        <div class="panel-body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Item</th>
                                        <th>Harga Satuan</th>
                                        <th class="text-right">Diskon per Item</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-right">Subtotal</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>J</td>
                                        <td>J</td>
                                        <td>J</td>
                                        <td>J</td>
                                        <td>J</td>
                                        <td>J</td>
                                        <td>J</td>

                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>nnn</th>
                                        <th>nnn</th>
                                        <th>nnn</th>

                                    </tr>
                                    <tr>
                                        <th>nnn</th>
                                        <th>nnn</th>
                                        <th>nnn</th>
                                    </tr>
                                    <tr>
                                        <th>nnn</th>
                                        <th>nnn</th>
                                        <th>nnn</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form id="form-tambah-edit" enctype="multipart/form-data">
                                <input type="hidden" name="id" class="form-control" id="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="kode_invoice">Kode Invoice</label>
                                            <input type="text" name="kode_invoice" id="kode_invoice" class="form-control"
                                                placeholder="Masukkan Kode Invoice">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Konsumen</label>
                                            <input type="text" name="nama" id="nama" class="form-control"
                                                placeholder="Masukkan Nama Konsumen">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No Hp</label>
                                            <input type="text" name="no_hp" id="no_hp" class="form-control"
                                                placeholder="Masukkan No Hp">
                                        </div>
                                        <div class="form-group">
                                            <label>Produk</label>
                                            <select name="produk_id" id="produk_id" data-width="100%"
                                                class="form-control">

                                                <option value="">-- Pilih --</option>
                                                @foreach ($produk as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_produk }}
                                                        ({{ $item->satuan->nama_satuan }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="jml_beli">Jumlah</label>
                                            <input type="text" name="jml_beli" id="jml_beli" class="form-control"
                                                placeholder="Masukkan Jumlah">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Total</label>
                                            <select name="total" id="total" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="bayar">Bayar</label>
                                            <input type="text" name="bayar" id="bayar" class="form-control"
                                                placeholder="Masukkan Bayar">
                                        </div>

                                        <div class="form-group">
                                            <label for="ket">Keterangan</label>
                                            <input type="text" name="ket" id="ket" class="form-control"
                                                placeholder="Masukkan Keterangan">
                                        </div>
                                    </div>
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
@section('scripts')
    <script>
        $('#litransaksi').addClass('menu-open');
        $('#menutransaksi').addClass('active');
        $('#create').addClass('active');
    </script>
@endsection
