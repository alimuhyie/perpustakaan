<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h3 class="card-title">Daftar <?= $judul; ?></h3>
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
                                <th>Nama</th>
                                <th>Tempat & Tanggal Lahir</th>
                                <th>Kelas</th>
                                <th>alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($anggota as $a) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->nama; ?></td>
                                    <td><?= $a->tempatlahir; ?>, <?= $a->tanggallahir; ?></td>
                                    <td><?= $a->kelas; ?></td>
                                    <td><?= $a->alamat; ?></td>
                                    <td><a href="<?= site_url('anggota/update/' . $a->id); ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
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