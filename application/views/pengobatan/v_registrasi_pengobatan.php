<?php
$footer = "footer_registrasi_pengobatan.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Registrasi Pengobatan
                </h3>

            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="jadwal">Jadwal Pengobatan</label><br>
                    <input type="date" id="jadwal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <select name="jam" id="jam" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" onClick="submit()">Buat Jadwal</button>
                <a href="?tampil=pengobatan&page=daftar_pengobatan"><button class="btn btn-primary" onclick="return confirm('Yakin batalkan Registrasi Pengobatan?');">Batal</button></a>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>