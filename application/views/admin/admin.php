<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-10">
              <h3 class="card-title">Akun Admin</h3>
            </div>
            <div class="col-lg-2 ml-auto">
              <a href="<?= base_url('Tambah-Admin'); ?>" type="button">
                <span>
                  <i class="fas fa-plus ml-1"> </i>
                  Tambah Admin
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($user as $ad) : ?>

                <tr>
                  <td><?= $no++; ?> </td>
                  <td><?= $ad->name; ?></td>
                  <td><?= $ad->email; ?></td>
                  <td>
                    <a href="<?= base_url('Hapus-Data-Admin') ?>"><i class="btn btn-danger fas fa-trash-alt"></i></a>
                    <a href="<?= base_url('admin/edit/' . $ad->id); ?>"><i class="btn btn-warning fas fa-edit"></i></a>
                  </td>

                </tr>
              <?php endforeach; ?>


            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gambar</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->