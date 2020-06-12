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
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <div class="input-group">
                        <input type="date" id="tgl_lahir" class="form-control" placeholder="Tanggal lahir" value="<?php echo $anggota->tanggal_lahir ?>">

                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control text-capitalize" value="<?php echo $anggota->tempat_lahir ?>" id="tmpt_lahir">
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $anggota->alamat ?>" id="alamat">
                </div>
                <div class="form-group">
                    <label for="alamat">Nomor Telepon</label>
                    <input type="number" id="no_tlp" class="form-control" value="<?php echo $anggota->no_tlp ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Agama</label>

                    <select class="custom-select" id="agama">
                        <option selected><?php echo $anggota->agama ?></option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                        <option value="Islam">Islam</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>

                    <select class="custom-select" id="jk">
                        <option selected><?php echo $anggota->jenis_kelamin ?></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <a href="?tampil=anggota&page=daftar_anggota"><button class="btn btn-primary" onclick="simpanAnggota()">Simpan</button></a>
                <a href="?tampil=anggota&page=daftar_anggota"><button class="btn btn-primary" onclick="return confirm('Yakin ingin membatalkan peruahan?');">Batal</button></a>

            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->