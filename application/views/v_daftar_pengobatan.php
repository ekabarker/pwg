<?php
$footer = null;
$jadwal = $this->M_Pengobatan->getMe($user->id);
$boleh_daftar = false;
if (count($jadwal) == 0) {
    $boleh_daftar = true;
} else {
    $jadwal = $jadwal[0];
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Daftar Pengobatan
                </h3>

            </div>
            <div class="card-body">
                <?php if ($boleh_daftar) { ?>
                    <a href="?page=registrasi_pengobatan"><button class="btn btn-primary">Registrasi Pengobatan</button></a></br><br>
                <?php } else { ?>
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal Pengobatan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-signature mr-1"></i> Nama</strong>
                            <p class="text-muted">
                                <?php echo $user->nama ?>
                            </p>
                            <hr>

                            <strong><i class="fas fa-birthday-cake mr-2"></i> Kelahiran</strong>
                            <p class="text-muted">
                                <?php echo $user->tempat_lahir ?>, <?php echo date('d F Y.', strtotime($user->tanggal_lahir)); ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-2"></i> Alamat</strong>
                            <p class="text-muted">
                                <?php echo $user->alamat ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-phone mr-1"></i> Nomor Telepon</strong>
                            <p class="text-muted">
                                <?php echo $user->no_tlp ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-calendar-alt mr-2"></i> Tanggal</strong>
                            <p class="text-muted">
                                <?php echo date('d F Y.', strtotime($jadwal->tanggal)); ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-clock mr-1"></i> Jam</strong>
                            <p class="text-muted">
                                <?php echo $jadwal->jam ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-clipboard mr-1"></i> Deskripsi</strong>
                            <p class="text-muted">
                                <?php echo $jadwal->deskripsi ?>
                            </p>

                            <hr>

                        </div>
                        <!-- /.card-body -->
                    <?php } ?>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->