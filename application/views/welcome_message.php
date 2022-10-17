<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/adminlte.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/jqvmap/jqvmap.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>e-</b>Perpus</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Login untuk Masuk</p>
        <?= $this->session->flashdata('pesan'); ?>
        <form action="<?= base_url('Auth'); ?>" method="post" class="mt-2 mb-3">
          <div class="input-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          <div class="input-group mt-1">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
          <div class="row">
            <!-- /.col -->
            <div class="col-lg mt-2">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <div class="text-center mb-3">
          <p>- OR -</p>
        </div>
        <p class="mb-0">
          <a href="<?= base_url('Dashboard') ?>" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="<?= base_url('assets/'); ?>js/demo.js"></script> -->
  <!-- daterangepicker -->
  <script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
</body>

</html>