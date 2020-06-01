<?php
$id = $this->input->get("id");
$kegiatan = $this->M_Kegiatan->get($id)[0];
$footer = null;

?>
<div class="row">
    <div class="col-md-8" style="margin: 0 auto">
        <div class="card card-outline card-info">
            <div class="card-header text-capitalize text-center">
                <h3 class="card-title">
                    <h1><b><?php echo $kegiatan->judul ?></b></h1>
                </h3>

            </div>
            <div class="card-body">
                <?php echo $kegiatan->data ?>
            </div>
            <div style="margin: 0 auto"><a href="?tampil=kegiatan&page=daftar_kegiatan"><button class="btn btn-primary">Kembali</button></a></div><br>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->