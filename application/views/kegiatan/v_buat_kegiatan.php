<?php
$footer = "footer_buat_kegiatan.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Buat Kegiatan
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" class="form-control">
                    </div>
                    <br>
                    <div class="form-group mb-10">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="textarea-editor" id="deskripsi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>

                <button class="btn btn-primary" onclick="simpanKegiatan()">Simpan</button>
                <a href="?tampil=artikel&page=daftar_artikel"><button class="btn btn-primary" onclick="return confirm('Yakin batalkan Buat Kegiatan?');">Batal</button></a>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->