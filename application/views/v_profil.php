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
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/img/profile/') . ($anggota->gambar ? $anggota->gambar : 'default.jpg'); ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><b><?php echo $anggota->username ?></b></h3>
                        <div class="row">
                            <div class="col-md-4" style="margin: auto;">
                                <?php echo $this->session->flashdata('pesan'); ?>
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#edit_profile" data-toggle="tab">Edit Profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?page=ubah_pass">Ubah Password</a></li>
                                    </ul>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="profile">
                                            <strong><i class="fas fa-fw fa-signature"></i> Nama</strong>
                                            <p class="text-muted text-capitalize">
                                                <?php echo $anggota->nama ?>
                                            </p>
                                            <hr>

                                            <strong><i class="fas fa-fw fa-birthday-cake"></i> Kelahiran</strong>
                                            <p class="text-muted text-capitalize">
                                                <?php echo $anggota->tempat_lahir ?>, <?php echo date('d F Y', strtotime($anggota->tanggal_lahir)); ?>
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-fw fa-map-marker-alt"></i> Alamat</strong>
                                            <p class="text-muted">
                                                <?php echo $anggota->alamat ?>
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-fw fa-phone"></i> Nomor Telepon</strong>
                                            <p class="text-muted">
                                                <?php echo $anggota->no_tlp ?>
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-fw fa-book mr-1"></i>Agama</strong>
                                            <p class="text-muted">
                                                <?php echo $anggota->agama ?>
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-fw fa-venus-mars mr-1"></i>Jeni Kelamin</strong>
                                            <p class="text-muted">
                                                <?php echo $anggota->jenis_kelamin ?>
                                            </p>

                                        </div>

                                        <div class="tab-pane" id="edit_profile">
                                            <?php echo form_open_multipart('anggota/update'); ?>
                                            <input type="text" name="id" value="<?php echo $anggota->id ?>" hidden>
                                            <strong><i class="fas fa-fw fa-signature"></i> Nama</strong>
                                            <input type="text" class="form-control" value="<?php echo $anggota->nama ?>" name="nama" id="nama">
                                            <hr>

                                            <strong><i class="fas fa-fw fa-user"></i> Username</strong>
                                            <input type="text" class="form-control" value="<?php echo $anggota->username ?>" name="username" id="username">

                                            <hr>

                                            <strong><i class="fas fa-fw fa-city"></i> Tempat Lahir</strong>
                                            <input type="text" class="form-control text-capitalize" value="<?php echo $anggota->tempat_lahir ?>" name="tempat_lahir" id="tmpt_lahir">

                                            <hr>

                                            <strong><i class="fas fa-fw fa-birthday-cake"></i> Tanggal Lahir</strong>
                                            <input type="date" id="tgl_lahir" class="form-control" placeholder="Tanggal lahir" value="<?php echo $anggota->tanggal_lahir ?>" name="tanggal_lahir">

                                            <hr>

                                            <strong><i class="fas fa-fw fa-map-marker-alt"></i> Alamat</strong>
                                            <input type="text" class="form-control" value="<?php echo $anggota->alamat ?>" id="alamat" name="alamat">

                                            <hr>

                                            <strong><i class="fas fa-fw fa-phone"></i> Nomor Telepon</strong>
                                            <input type="number" id="no_tlp" class="form-control" value="<?php echo $anggota->no_tlp ?>" name="no_tlp">

                                            <hr>

                                            <strong><i class="fas fa-fw fa-book mr-1"></i>Agama</strong>
                                            <select class="custom-select" id="agama" name="agama">
                                                <option selected><?php echo $anggota->agama ?></option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>

                                            <hr>

                                            <strong><i class="fas fa-fw fa-venus-mars mr-1"></i>Jeni Kelamin</strong>
                                            <select class="custom-select" id="jk" name="jk">
                                                <option selected><?php echo $anggota->jenis_kelamin ?></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>

                                            <hr>

                                            <strong><i class="fas fa-fw fa-phone"></i>Foto Profile</strong>
                                            <input type="file" name="gambar" id="gambar" class="form-control" placeholder="pilih foto max(2mb)" value="<?php echo $anggota->gambar ?>">

                                            <hr>
                                            <div class="col" style="margin: 0 auto">
                                                <div class="row">
                                                    <div>
                                                        <a href="?page=profil"><button class="btn btn-primary" type="submit">Simpan</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- About Me Box -->
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>