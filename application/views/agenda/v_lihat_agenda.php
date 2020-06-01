<?php
$id = $this->input->get("id");
$agenda = $this->M_Agenda->get($id)[0];

$myfile = fopen("agenda/".$agenda->data, "r") or die("Unable to open file!");
$data = fread($myfile,filesize("agenda/".$agenda->data));
fclose($myfile);

$myfile = fopen("agenda/sarana/".$agenda->sarana, "r") or die("Unable to open file!");
$sarana = fread($myfile,filesize("agenda/sarana/".$agenda->sarana));
fclose($myfile);


$footer = null;
?>
<div class="row">
    <div class="col-md-8" style="margin: 0 auto">
        <div class="card card-outline card-info">
            <div class="card-header text-capitalize text-center">
                <h3 class="card-title">

                    <h1><b><?php echo $agenda->judul ?></b></h1>

                </h3>

            </div>
            <div class="card-body text-justify">
                <?php echo $data ?>
                <br>
                <hr>
                <div class="row">
                    <div class="col-2">Waktu</div>
                    <div>:</div>
                    <div class="col-7"><?php echo $agenda->pelaksanaan ?></div>
                </div>
                <div class="row">
                    <div class="col-2">Tempat</div>
                    <div>:</div>
                    <div class="col-7"><?php echo $agenda->tempat ?></div>
                </div>
                <div class="row">
                    <div class="col-2">Sarana</div>
                    <div>:</div>
                    <div class="col-7"><?php echo $sarana ?></div>
                </div>
            </div>
            <div style="margin: 0 auto"><a href="?tampil=agenda&page=daftar_agenda"><button class="btn btn-primary">Kembali</button></a></div><br>
        </div>
    </div>
</div>