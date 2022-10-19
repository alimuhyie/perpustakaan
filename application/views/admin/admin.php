<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-10">
              <h3 class="card-title">Akun Anggota Perpustakaan</h3>
            </div>
            <div class="col-lg-2 ml-auto">
              <a href="<?= base_url('Tambah-Anggota'); ?>" type="button">
                <span>
                  <i class="fas fa-plus ml-1"> </i>
                  Tambah Anggota
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
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Status Anggota</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($anggota as $ad) : ?>

                <tr>
                  <td><?= $no++; ?> </td>
                  <td><?= $ad->id_anggota; ?> </td>
                  <td><?= $ad->nama; ?></td>
                  <td><?= $ad->email; ?></td>
                  <td><?= $ad->jk; ?></td>
                  <td><?= $ad->alamat; ?></td>
                  <td><?= $ad->tempat_lahir; ?>, <?= $ad->tanggal_lahir; ?></td>
                  <td><?= $ad->status_anggota; ?></td>
                  <td>
                    <a href="<?= base_url('anggota/edit/' . $ad->id); ?>"><i class="btn btn-warning fas fa-edit"></i></a>
                    <a href="<?= base_url('anggota/delete/' . $ad->id) ?>"><i class="btn btn-danger fas fa-trash-alt"></i></a>
                  </td>

                </tr>
              <?php endforeach; ?>


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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->