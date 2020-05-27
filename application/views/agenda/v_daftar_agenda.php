<?php
$footer = "footer_daftar_agenda.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Daftar Agenda Kegiatan
                </h3>

            </div>
            <div class="card-body">
                <a href="?tampil=agenda&page=buat_agenda"><button class="btn btn-primary">Buat Agenda</button></a></br><br>
                <table class="table table-bordered" id="tabel">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Agenda Kegiatan</th>
                            <th>Pelaksanaan</th>
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