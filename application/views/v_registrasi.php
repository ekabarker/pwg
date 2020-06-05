<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrasi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page bg-gradient-primary">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Form</b>Regitrasi</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <form class="anggota" method="post" action="<?php echo base_url('login/registrasi'); ?>">
                    <p class="login-box-msg">Silakan Registrasi Anggota</p>
                    <label for="nama">Nama</label>
                    <div class="input-group mb-1">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-signature"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <div class="input-group mb-1">
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" value="<?= set_value('tanggal_lahir'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-calendar-alt"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('tanggal_lahir', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="tempat_lahir">Tempat Lahir</label>
                    <div class="input-group mb-1">
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Kabupaten/Kota" value="<?= set_value('tempat_lahir'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-city"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('tempat_lahir', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="alamat">Alamat</label>
                    <div class="input-group mb-1">
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Tempat Tinggal" value="<?= set_value('alamat'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="alamat">Nomor Telepon</label>
                    <div class="input-group mb-1">
                        <input type="number" id="no_tlp" name="no_tlp" class="form-control" placeholder="No Telepon / WA" value="<?= set_value('no_tlp'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('no_tlp', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="username">Nama Pengguna</label>
                    <div class="input-group mb-1">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="password1">Password</label>
                    <div class="input-group m-1">
                        <input type="password" id="password1" name="password1" class="form-control" placeholder="Password min-8 karakter">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?><br>

                    <label for="password2">Ulangi Password</label>
                    <div class="input-group m-1">
                        <input type="password" id="password2" name="password2" class="form-control" placeholder="Password min-8 karakter">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="input-group m-1">
                        <label class="radio-inline col-5">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        </label>
                        <label class="radio-inline col-5">
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                        </label>
                        <?= form_error('jenis_kelamin', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label for="agama">Agama</label>
                    <div class="input-group m-1">
                        <label class="radio-inline col-3">
                            <input type="radio" name="agama" value="Hindu">Hindu
                        </label>
                        <label class="radio-inline col-3">
                            <input type="radio" name="agama" value="Budha">Budha
                        </label>
                        <label class="radio-inline col-3">
                            <input type="radio" name="agama" value="Islam">Islam
                        </label>
                        <label class="radio-inline col-3">
                            <input type="radio" name="agama" value="Kristen">Kristen
                        </label>
                        <?= form_error('agama', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <?php
                //outputkan error jika ada
                echo $this->session->flashdata('error');
                ?>

                <div class=" small  mt-2 mb-0 text-center">
                    <a href="<?php echo base_url('login/index'); ?>" class="text-center">Sudah memiliki Akun? Login!</a>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/js/adminlte.min.js"></script>

</body>

</html>