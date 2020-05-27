<?php
$id = $this->input->get("id");
$agenda = $this->M_Agenda->get($id)[0];
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
                <?php echo $agenda->data ?>
                <br><br>
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
                    <div class="col-7"><?php echo $agenda->sarana ?></div>
                </div>

            </div>
            </>
            <!-- /.col-->

            <!-- ./row -->