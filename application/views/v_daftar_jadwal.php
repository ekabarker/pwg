<?php
$footer = "footer_daftar_jadwal.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Jadwal Praktik
                </h3>

            </div>
            <div class="card-body">
                <?php if($user->role == "admin") { ?>
                <a href="?page=jadwal"><button class="btn btn-primary">Tambah Jadwal</button></a>
                <?php } ?>
                <div class="box box-primary">
                    <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                        <div id="calendar"></div>
                    </div>
                <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>