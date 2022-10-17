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
                            <a href="<?= base_url('Pinjam-Buku'); ?>" type="button">
                                <span>
                                    <i class="fas fa-plus ml-1"> </i>
                                    Pinjam Buku
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
                                <th>Nama Peminjam</th>
                                <th>Kelas Peminjam</th>
                                <th>Buku</th>
                                <th>Jumlah Buku Pinjaman</th>
                                <th>Tanggal Pinjaman</th>
                                <th>lama pinjaman</th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pinjam as $a) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->nama; ?></td>
                                    <td><?= $a->kelas; ?></td>
                                    <td><?= $a->namabuku; ?></td>
                                    <td><?= $a->jmlbuku; ?></td>
                                    <td><?= $a->tglpinjam; ?></td>
                                    <td><?= $a->lamapinjam; ?> Hari</td>
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