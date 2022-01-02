{{-- Modal Star --}}
<div class="modal fade" id="modal-tambah-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-judul">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                                <select id="produk_id" name="produk_id" class="form-control select2"
                                    style="width: 100%;">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($produk as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jml">Jumlah</label>
                                <input type="text" name="jml" id="jml" class="form-control"
                                    placeholder="Masukkan Jumlah">
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- Modal End --}}
