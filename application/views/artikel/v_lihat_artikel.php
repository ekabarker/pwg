<?php
$id = $this->input->get("id");
$artikel = $this->M_Artikel->get($id)[0];

$myfile = fopen("artikel/".$artikel->data, "r") or die("Unable to open file!");
$data = fread($myfile,filesize("artikel/".$artikel->data));
fclose($myfile);

$footer = null;

?>
<div class="row">
    <div class="col-md-10" style="margin: 0 auto">
        <div class="card card-outline card-info">
            <div class="card-header text-capitalize text-center">
                <h3 class="card-title">
                    <h1><b><?php echo $artikel->judul ?></b></h1>
                </h3>

            </div>
            <div class="card-body text-justify">
                <?php echo $data ?>

            </div>
            <div style="margin: 0 auto"><a href="?tampil=artikel&page=daftar_artikel"><button class="btn btn-primary">Kembali</button></a></div><br>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->