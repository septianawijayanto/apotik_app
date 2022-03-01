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
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Apoteker">Apoteker</option>
                            <option value="Kasir">Kasir</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Masukkan Password">
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
