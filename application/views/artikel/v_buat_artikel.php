<?php
$footer = "footer_buat_artikel.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Buat Artikel
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
                        <textarea class="textarea-editor" id="artikel-editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>

                <button class="btn btn-primary" onclick="simpanArtikel()">Simpan</button>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->