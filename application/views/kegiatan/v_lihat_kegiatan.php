<?php
$id = $this->input->get("id");
$kegiatan = $this->M_Kegiatan->get($id)[0];

?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <h1><b><?php echo $kegiatan->judul ?></b></h1>
                </h3>

            </div>
            <div class="card-body">
                <?php echo $kegiatan->data ?>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->