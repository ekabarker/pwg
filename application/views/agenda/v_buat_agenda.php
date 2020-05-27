<?php
$footer = "footer_buat_agenda.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Buat Agenda Kegiatan
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
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="textarea-editor" id="deskripsi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="pelaksanaan">Waktu Pelaksanaan</label><br>
                        <input type="datetime-local" id="pelaksanaan" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tempat">Tempat</label><br>
                        <input type="text" id="tempat" class="form-control" placeholder="Tempat Pelaksanaan">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="sarana">Sarana Kegiatan</label>
                        <textarea class="textarea-editor" id="sarana" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>

                <a href="?tampil=agenda&page=daftar_agenda"><button class="btn btn-primary" onclick="simpanAgenda()">Simpan</button></a>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->