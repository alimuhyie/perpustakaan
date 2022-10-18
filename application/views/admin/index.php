<div class="row">
  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Anggota</span>
        <?php $jumlah = $this->db->query('SELECT COUNT(*) AS jumlah_anggota FROM users');
        return $jumlah; ?>
        <span class="info-box-number"><?= $jumlah; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="fas fa-book"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Buku</span>
        <span class="info-box-number">1,410</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-warning"><i class="fas fa-file-invoice"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Peminjaman</span>
        <span class="info-box-number">13,648</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->