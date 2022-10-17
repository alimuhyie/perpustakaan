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
                        <input type="text" name="id_anggota" class="form-control" id="id_anggota" placeholder="Id anggota" value="<?= set_value('id_anggota') ?>">
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
                        <input type="text" class="form-control" name="lamapinjam" id="lamapinjam" placeholder="lama pinjam" value="<?= set_value('lamapinjam') ?>">
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