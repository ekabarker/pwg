<?php
$id = $this->session->user->id;
$anggota = $this->M_Anggota->get($id)[0];
$footer = null;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <h1><b><?php echo $anggota->username ?></b></h1>
                </h3>

            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->nama ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->tanggal_lahir ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->tempat_lahir ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->alamat ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Agama</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->agama ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->jenis_kelamin ?>" readonly>
                </div>

            </div>
        </div>
    </div>
    <!-- /.col-->
</div>