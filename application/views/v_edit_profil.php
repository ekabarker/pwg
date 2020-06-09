<?php
$id = $this->session->user->id;
$anggota = $this->M_Anggota->get($id)[0];
$footer = null;
$status = $this->input->get("status");
if($status == 'false') {
    echo "<script>alert('Gagal merubah password')</script>";
} else if($status == 'true') {
    echo "<script>alert('Berhasil merubah password')</script>";
}
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
                                <h3 class="card-title">Ubah Password</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="anggota/ubahPassword" method="post">
                                <input type="text" name="id" value="<?php echo $this->session->user->id ?>" hidden>
                                <strong><i class="fas fa-fw fa-user"></i> Password Lama</strong>
                                <input type="password" class="form-control" id="password" name="password">
                                <?php echo form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                <hr>

                                <strong><i class="fas fa-fw fa-user"></i> Password baru</strong>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?= form_error('new_password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                                <hr>

                                <strong><i class="fas fa-fw fa-user"></i> Ulangi Password</strong>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?= form_error('new_password2', ' <small class="text-danger pl-3">', '</small>'); ?>
                                <hr>

                                <div class="col" style="margin: 0 auto">
                                    <div class="row">
                                        <div>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <a href="?page=profil"><button class="btn btn-primary" onclick="return confirm('Yakin ingin membatalkan peruahan?');">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- About Me Box -->

            </div>

        </div>
    </div>
</section>