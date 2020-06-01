<?php

$jenis_pengobatan = $this->M_JenisPengobatan->getAll();
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
                    <label for="jenis">Jenis Pengobatan</label>
                    <select name="jenis" id="jenis" class="form-control">
                    <?php
                        foreach($jenis_pengobatan as $jenis) {
                            echo "<option value='$jenis->id'>$jenis->nama</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" onClick="submit()">Buat Jadwal</button>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>