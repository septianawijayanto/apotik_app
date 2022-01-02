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
                    <div class="form-group">
                        <label for="nama_satuan">Satuan</label>
                        <input type="text" name="nama_satuan" id="nama_satuan" class="form-control"
                            placeholder="Masukkan Satuan">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" id="btn-tutup" data-dismiss="modal">Tutup</button>
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
