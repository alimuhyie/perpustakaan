<!-- left column -->
<div class="col-md">
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><?= $judul; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="<?= base_url('Pinjam-Buku'); ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="id_anggota" class="col-sm-2 col-form-label">Id Peminjam</label>
                    <div class="col-sm-5">
                        <!-- <input type="text" name="id_anggota" class="form-control" id="id_anggota" placeholder="Id anggota" value="<?= set_value('id_anggota') ?>"> -->
                        <div class="input-group input-group">
                            <input placeholder="Nomor Anggota" name="id_anggota" type="text" class="form-control">
                            <span class="input-group-append">
                                <button type="button" data-toggle="modal" data-target="#modal-anggota" class="btn btn-info btn-flat">Go!</button>
                            </span>
                        </div>
                        <?= form_error('id_anggota', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="id_buku" class="col-sm-2 col-form-label">id buku</label>
                    <div class="col-sm-5">
                        <input type="text" name="id_buku" class="form-control" id="id_buku" placeholder="id buku" value="<?= set_value('id_buku') ?>">
                        <?= form_error('id_buku', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pinjam" class="col-sm-2 col-form-label">lama pinjam</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="lamapinjam" id="lamapinjam" placeholder="lama pinjam" value="<?= set_value('lamapinjam') ?>">
                        <?= form_error('lamapinjam', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggalpinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-5">
                        <input type="date" name="tanggalpinjam" class="form-control" id="kelas" placeholder="jenis buku (Cerita)" value="<?= date('Y-m-d'); ?>">
                        <?= form_error('tanggalpinjam', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Registrasi</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

</div>
<!--/.col (left) -->
<div class="modal fade" id="modal-anggota">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Alamat</th>
                            <th>TTL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>makan</td>
                            <td>makan</td>
                            <td>makan</td>
                            <td>makan</td>
                            <td>makan</td>
                            <td>makan</td>

                            <!-- <td>
                                    <a href="<?= base_url('anggota/edit/' . $ad->id); ?>"><i class="btn btn-warning fas fa-edit"></i></a>
                                    <a href="<?= base_url('anggota/delete/' . $ad->id) ?>"><i class="btn btn-danger fas fa-trash-alt"></i></a>
                                </td> -->

                        </tr>

                    </tbody>
                    <!-- <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gambar</th>
              </tr>
            </tfoot> -->
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->