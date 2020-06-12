<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Padukuhan Waluh Geni</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url() ?>home/logout" class="nav-link" onclick="return confirm('Yakin ingin keluar?');">Logout <i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <!--<img src="<?php echo base_url() ?>assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
        <span class="brand-text font-weight-light">Padukuhan Waluh Geni </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <?php
            $user = $this->session->user;
            ?>
            <img src="<?php echo base_url('assets/img/profile/') . ($user->gambar ? $user->gambar : 'default.jpg') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="?page=profil" class="d-block"><?php echo ($this->session->user->username) ?></a>
            <input type="text" id="role" value="<?php echo $user->role ?>" hidden>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!--
            <li class="nav-header">
              <h5><?php echo ($user->role == 'admin' ? 'Administrator' : 'Anggota') ?></h5>
            </li>
            -->
            <li class="nav-item">
              <a href="?page=home_konten" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <?php if ($user->role == 'admin') { ?>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>?tampil=anggota&page=daftar_anggota" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Anggota
                  </p>
                </a>
              </li>
            <?php } ?>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>?tampil=artikel&page=daftar_artikel" class="nav-link">
                <i class="nav-icon fas fa-book-open"></i>
                <p>
                  Artikel
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>?tampil=agenda&page=daftar_agenda" class="nav-link">
                <i class="nav-icon fas fa-calendar-plus"></i>
                <p>
                  Agenda Kegiatan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>?tampil=kegiatan&page=daftar_kegiatan" class="nav-link">
                <i class="nav-icon fas fa-calendar-check"></i>
                <p>
                  Kegiatan
                </p>
              </a>
            </li>
            <!--<li class="nav-header">
              <h5>Penjadwalan</h5>
            </li>-->
            <?php if ($user->role == 'admin') { ?>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>?tampil=antrian&page=antrian_pasien" class="nav-link">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>
                    Antrian Pasien
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>?page=daftar_jadwal" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Jadwal
                  </p>
                </a>
              </li>
            <?php }  ?>
            <?php if ($user->role == 'anggota') { ?>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>?tampil=pengobatan&page=daftar_pengobatan" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Registrasi Pengobatan
                  </p>
                </a>
              </li>
            <?php } ?>
            <br>
            <li class="nav-item">
              <a href="<?php echo base_url() ?>home/logout" class="nav-link" onclick="return confirm('Yakin ingin keluar?');">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?php echo ($user->role == 'admin' ? 'Administrator' : 'Anggota') ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!--<li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li> 
                  -->
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?php
          if ($tampil != "") {
            require_once("$tampil/v_$menu.php");
          } else {
            require_once("v_$menu.php");
          }
          ?>
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <div>
      <!--
   <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-rc.5
      </div>
    </footer>
  </div>
        -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS <?php echo base_url() ?>assets/-->
    <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>


    <?php
    if ($footer) {
      require_once("footer/$footer");
    }
    ?>
</body>

</html>