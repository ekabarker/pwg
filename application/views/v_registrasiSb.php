<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="login-logo">
                    <br>
                    <a href=""><b>Form</b>Regitrasi</a>
                </div>
                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <form class="anggota" method="post" action="<?php echo base_url('login/registrasi'); ?>">
                                        <label for="nama" class="h6 text-gray-900 mb-2">Nama</label>
                                        <div class="input-group mb-1">
                                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-signature"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tanggal_lahir" class="h6 text-gray-900 mb-2 mt-3">Tanggal Lahir</label>
                                                <div class="input-group mb-1">
                                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" value="<?= set_value('tanggal_lahir'); ?>">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-calendar-alt"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?= form_error('tanggal_lahir', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="tempat_lahir" class="h6 text-gray-900 mb-2 mt-3">Tempat Lahir</label>
                                                <div class="input-group mb-1">
                                                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Kabupaten/Kota" value="<?= set_value('tempat_lahir'); ?>">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-city"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?= form_error('tempat_lahir', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <label for="alamat" class="h6 text-gray-900 mb-2">Alamat</label>
                                        <div class="input-group mb-1">
                                            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat Tempat Tinggal" value="<?= set_value('alamat'); ?>">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-map-marker-alt"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <label for="alamat" class="h6 text-gray-900 mb-2 mt-3">Nomor Telepon</label>
                                        <div class="input-group mb-1">
                                            <input type="number" id="no_tlp" name="no_tlp" class="form-control" placeholder="No Telepon / WA" value="<?= set_value('no_tlp'); ?>">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <?= form_error('no_tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <label for="username" class="h6 text-gray-900 mb-2 mt-3">Nama Pengguna</label>
                                        <div class="input-group mb-1">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="password1" class="h6 text-gray-900 mb-2 mt-3">Password</label>
                                                <div class="input-group m-1">
                                                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Password min-8 karakter">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="password2" class="h6 text-gray-900 mb-2 mt-3">Ulangi Password</label>
                                                <div class="input-group m-1">
                                                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Password min-8 karakter">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" class="h6 text-gray-900 mb-2">Agama</label>
                                            <div class="input-group">
                                                <select class="custom-select" id="agama" name="agama" value="<?= set_value('agama'); ?>">
                                                    <option selected><?= set_value('agama'); ?></option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-book"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?= form_error('agama', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <label for="jenis_kelamin" class="h6 text-gray-900 mb-4">Jenis Kelamin</label>
                                        <div class="input-group">
                                            <label class="radio-inline col-5 h6 text-gray-900 mb-4">
                                                <input class="mr-1" type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                                            </label>
                                            <label class="radio-inline col-5 h6 text-gray-900 mb-4">
                                                <input class="mr-1" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                            </label>
                                            <?= form_error('jenis_kelamin', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="row">
                                            <!-- /.col -->
                                            <div class="mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?php echo base_url('login/index'); ?>" class="text-center">Sudah memiliki Akun? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/jquery/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>