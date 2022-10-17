<!-- left column -->
<div class="col-md">
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><?= $judul; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="<?= base_url('Admin/tambah'); ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= $user->email; ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <input type="hidden" name="id" class="form-control" id="id" value="<?= $user->id; ?>">
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?= $user->nama; ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
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