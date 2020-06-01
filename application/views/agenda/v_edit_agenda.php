<?php
$footer = "footer_edit_agenda.php";
$id = $this->input->get("id");
$agenda = $this->M_Agenda->get($id)[0];
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Edit Agenda Kegiatan
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" class="form-control" value="<?php echo $agenda->judul ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="textarea-editor" id="deskripsi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $agenda->data ?></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="pelaksanaan">Waktu Pelaksanaan</label><br>
                        <input type="datetime-local" id="pelaksanaan" class="form-control" value="<?php echo $agenda->pelaksanaan ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tempat">Tempat</label><br>
                        <input type="text" id="tempat" class="form-control" placeholder="Tempat Pelaksanaan" value="<?php echo $agenda->tempat ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="sarana">Sarana Kegiatan</label>
                        <textarea class="textarea-editor" id="sarana" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $agenda->sarana ?></textarea>
                    </div>
                </div>

                <a href="?tampil=agenda&page=daftar_agenda"><button class="btn btn-primary" onclick="simpanAgenda()">Simpan</button></a>
                <a href="?tampil=agenda&page=daftar_agenda"><button class="btn btn-primary" onclick="return confirm('Yakin ingin membatalkan peruahan?');">Batal</button></a>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- ./row -->