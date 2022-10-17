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
                            <a href="<?= base_url('Tambah-Buku'); ?>" type="button">
                                <span>
                                    <i class="fas fa-plus ml-1"> </i>
                                    Tambah Buku
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
                                <th>Nama Buku</th>
                                <th>Penerbit</th>
                                <th>Jenis Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($buku as $a) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->nama; ?></td>
                                    <td><?= $a->penerbit; ?></td>
                                    <td><?= $a->jenisbuku; ?></td>
                                    <td><?= $a->jumlahbuku; ?></td>
                                    <td><a href="<?= site_url('buku/edit/' . $a->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                                        <a href="<?= site_url('buku/delete/' . $a->id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                    </td>
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