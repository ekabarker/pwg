<?php
$footer = "footer_daftar_artikel.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    Daftar Artikel
                </h3>

            </div>
            <div class="card-body">
                <a href="?tampil=artikel&page=buat_artikel"><button class="btn btn-primary">Buat Artikel</button></a></br><br>
                <table class="table table-bordered" id="tabel">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul Artikel</th>
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