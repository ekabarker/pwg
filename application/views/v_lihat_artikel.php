<?php
    $id = $this->input->get("id");
    $artikel = $this->M_Artikel->get($id)[0];

?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <?php echo $artikel->judul ?>
                </h3>
                
            </div>
            <div class="card-body">
                <?php echo $artikel->data ?>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

    <!-- ./row -->