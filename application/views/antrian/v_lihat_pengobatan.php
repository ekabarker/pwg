<?php
$footer = null;
$id = $this->input->get("id");
$pengobatan = $this->M_Pengobatan->get($id)[0];
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Data Antrian Pasien
                </h3>

            </div>
            <div class="card-body">

                <div class="card card-light">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Pengobatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-signature mr-1"></i> Nama</strong>
                        <p class="text-muted">
                            <?php echo $pengobatan->nama_anggota ?>
                        </p>
                        <hr>

                        <strong><i class="fas fa-birthday-cake mr-2"></i> Kelahiran</strong>
                        <p class="text-muted">
                            <?php echo $pengobatan->tempat_lahir ?>, <?php echo date('d F Y', strtotime($pengobatan->tanggal_lahir)); ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-2"></i> Alamat</strong>
                        <p class="text-muted">
                            <?php echo $pengobatan->alamat ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-phone mr-1"></i> Nomor Telepon</strong>
                        <p class="text-muted">
                            <?php echo $pengobatan->no_tlp ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-calendar-alt mr-2"></i> Tanggal</strong>
                        <p class="text-muted">
                            <?php echo date('d F Y', strtotime($pengobatan->tanggal)); ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-clock mr-1"></i> Jam</strong>
                        <p class="text-muted">
                            <?php echo $pengobatan->jam ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-clipboard mr-1"></i> Deskripsi</strong>
                        <p class="text-muted">
                            <?php echo $pengobatan->deskripsi ?>
                        </p>
                    </div>
                    <!-- /.card-body -->

                </div>
                <div><a href="?tampil=antrian&page=antrian_pasien"><button class="btn btn-primary">Kembali</button></a></div><br />
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->