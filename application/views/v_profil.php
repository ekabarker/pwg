<?php
$id = $this->session->user->id;
$anggota = $this->M_Anggota->get($id)[0];
$footer = null;
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7" style="margin: 0 auto">
                <!-- profile image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/img/profile/') . $anggota->gambar; ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><b><?php echo $anggota->username ?></b></h3>

                        <p class="text-muted text-center"><b><?php echo $anggota->nama ?></b></p>

                        <div class="card card-light">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-signature mr-1"></i> Nama</strong>
                                <p class="text-muted">
                                    <?php echo $anggota->nama ?>
                                </p>
                                <hr>

                                <strong><i class="fas fa-birthday-cake mr-2"></i> Kelahiran</strong>
                                <p class="text-muted">
                                    <?php echo $anggota->tempat_lahir ?>, <?php echo $anggota->tanggal_lahir ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-2"></i> Alamat</strong>
                                <p class="text-muted">
                                    <?php echo $anggota->alamat ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-phone mr-1"></i> Nomor Telepon</strong>
                                <p class="text-muted">
                                    <?php echo $anggota->no_tlp ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-book mr-2"></i>Agama</strong>
                                <p class="text-muted">
                                    <?php echo $anggota->agama ?>
                                </p>

                                <hr>

                                <strong><i class="fas fa-venus-mars mr-1"></i>Jeni Kelamin</strong>
                                <p class="text-muted">
                                    <?php echo $anggota->jenis_kelamin ?>
                                </p>

                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="col-2" style="margin: 0 auto">
                            <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- About Me Box -->

            </div>

        </div>
    </div>
</section>