<?php
$footer = "footer_daftar_kegiatan.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Daftar Kegiatan
                </h3>

            </div>
            <div class="card-body">
                <?php if ($user->role == 'admin') { ?>
                    <a href="?tampil=kegiatan&page=buat_kegiatan"><button class="btn btn-primary">Buat Kegiatan</button></a></br><br>
                <?php } ?>
                <table class="table table-bordered" id="tabel">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->