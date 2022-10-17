<!-- left column -->
<div class="col-md">
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><?= $judul; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="<?= base_url('Tambah-Admin'); ?>">
            <div class="card-body">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="role_id" class="form-control" required="required">
                        <option value="1">Admin Perpustakaan</option>
                        <option value="2">Anggota</option>
                    </select>
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