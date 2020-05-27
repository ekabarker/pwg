<?php
$footer = "footer_edit_anggota.php";
$id = $this->input->get("id");
$anggota = $this->M_Anggota->get($id)[0];
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Edit Anggota
                </h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body pad">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->nama ?>" id="nama">
                </div>
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->username ?>" id="username">
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->tanggal_lahir ?>" id="tgl_lahir">
                </div>
                <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->tempat_lahir ?>" id="tmpt_lahir">
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->alamat ?>" id="alamat">
                </div>
                <div class="form-group">
                    <label for="nama">Agama</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->agama ?>" id="agama">
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->jenis_kelamin ?>" id="jk">
                </div>

                <a href="?tampil=anggota&page=daftar_anggota"><button class="btn btn-primary" onclick="simpanAnggota()">Simpan</button></a>

            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->