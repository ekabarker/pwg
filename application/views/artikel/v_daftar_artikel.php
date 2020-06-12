<?php
$footer = "footer_daftar_artikel.php";
$artikel = $this->M_Artikel->getAll();
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
                <?php if ($user->role == 'admin') { ?>
                    <a href="?tampil=artikel&page=buat_artikel"><button class="btn btn-primary">Buat Artikel</button></a></br><br>
                    <table class="table table-bordered" id="tabel">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul Artikel</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                <?php } else { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <?php foreach ($artikel as $data) { ?>
                                    <table class="table table-bordered" id="tabel_artikel">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-3 mb-3 mb-sm-0">
                                                            <img src="<?php echo base_url('assets/img/photo1.png') ?>" alt="..." class="img-thumbnail">
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="post-preview" id="preview">
                                                                <a href="<?php echo base_url('home?tampil=artikel&page=lihat_artikel&id=' . $data->id) ?>">
                                                                    <h2 class="post-title text-capitalize" style="color: black;">
                                                                        <b><?php echo $data->judul; ?></b>
                                                                    </h2>
                                                                    <h3 class="post-subtitle font-weight-light" style="color: black;"><?php echo $data->sub_judul; ?>

                                                                    </h3>
                                                                </a>
                                                                <p class="font-italic" style="color: gray;">Diposting Oleh Padukuhan Waluh Geni
                                                                    <a href="<?php echo base_url('home?tampil=artikel&page=lihat_artikel&id=' . $data->id) ?>" style="color: indigo;">Detail</a>
                                                                    <?php echo date('d F Y', strtotime($data->tanggal)); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>

<!-- ./row -->