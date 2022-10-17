<!-- left column -->
<div class="col-md">
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><?= $judul; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="<?= base_url('Update-Buku'); ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Buku" value="<?= $buku->nama; ?>">
                        <input readonly type="text" name="id" class="form-control" id="id" placeholder="id Buku" value="<?= $buku->id; ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit" value="<?= $buku->penerbit; ?>">
                        <?= form_error('kelas', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="buku" class="col-sm-2 col-form-label">Jumlah buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlahbuku" id="jumlahbuku" placeholder="Jumlah buku" value="<?= $buku->jumlahbuku; ?>">
                        <?= form_error('jumlahbuku', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenisbuku" class="col-sm-2 col-form-label">Jenis Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenisbuku" class="form-control" id="kelas" placeholder="jenis buku (Cerita)" value="<?= $buku->jenisbuku; ?>">
                        <?= form_error('jenisbuku', '<small class="text-danger">', '</small>'); ?>
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