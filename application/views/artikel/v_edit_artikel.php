<?php
$footer = "footer_edit_artikel.php";
$id = $this->input->get("id");
$artikel = $this->M_Artikel->get($id)[0];

$myfile = fopen("artikel/".$artikel->data, "r") or die("Unable to open file!");
$data = fread($myfile,filesize("artikel/".$artikel->data));
fclose($myfile);


?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Edit Artikel
                </h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="fom-group">
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" class="form-control" value="<?php echo $artikel->judul ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="textarea-editor" id="artikel-editor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $data ?></textarea>
                    </div>


                </div>

                <a href="?tampil=artikel&page=daftar_artikel"><button class="btn btn-primary" onclick="simpanArtikel()">Simpan</button></a>
                <a href="?tampil=artikel&page=daftar_artikel"><button class="btn btn-primary" onclick="return confirm('Yakin ingin membatalkan peruahan?');">Batal</button></a>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->