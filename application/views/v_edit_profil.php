<?php
$id = $this->session->user->id;
$anggota = $this->M_Anggota->get($id)[0];
$footer = "footer_edit_anggota.php";
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7" style="margin: 0 auto">
                <!-- profile image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/img/profile/') . ($anggota->gambar ? $anggota->gambar : 'default.jpg'); ?>">
                        </div>

                        <h3 class="profile-username text-center"><b><?php echo $anggota->username ?></b></h3>

                        <div class="card card-light">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-fw fa-signature"></i> Nama</strong>
                                <input type="text" class="form-control" value="<?php echo $anggota->nama ?>" id="nama">
                                <hr>

                                <strong><i class="fas fa-fw fa-user"></i> Username</strong>
                                <input type="text" class="form-control" value="<?php echo $anggota->username ?>" id="username">

                                <hr>

                                <strong><i class="fas fa-fw fa-city"></i> Tempat Lahir</strong>
                                <input type="text" class="form-control text-capitalize" value="<?php echo $anggota->tempat_lahir ?>" id="tmpt_lahir">

                                <hr>

                                <strong><i class="fas fa-fw fa-birthday-cake"></i> Tanggal Lahir</strong>
                                <input type="date" id="tgl_lahir" class="form-control" placeholder="Tanggal lahir" value="<?php echo $anggota->tanggal_lahir ?>">

                                <hr>

                                <strong><i class="fas fa-fw fa-map-marker-alt"></i> Alamat</strong>
                                <input type="text" class="form-control" value="<?php echo $anggota->alamat ?>" id="alamat">

                                <hr>

                                <strong><i class="fas fa-fw fa-phone"></i> Nomor Telepon</strong>
                                <input type="number" id="no_tlp" class="form-control" value="<?php echo $anggota->no_tlp ?>">

                                <hr>

                                <strong><i class="fas fa-fw fa-book mr-1"></i>Agama</strong>
                                <select class="custom-select" id="agama">
                                    <option selected><?php echo $anggota->agama ?></option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                </select>

                                <hr>

                                <strong><i class="fas fa-fw fa-venus-mars mr-1"></i>Jeni Kelamin</strong>
                                <select class="custom-select" id="jk">
                                    <option selected><?php echo $anggota->jenis_kelamin ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                <hr>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="col-2" style="margin: 0 auto">
                            <div class="row">
                                <div>
                                    <a href="?page=profil"><button class="btn btn-primary" onclick="simpanAnggota()">Simpan</button></a>
                                    <a href="?page=profil"><button class="btn btn-primary" onclick="return confirm('Yakin ingin membatalkan peruahan?');">Batal</button></a>
                                </div>



                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- About Me Box -->

            </div>

        </div>
    </div>
</section>