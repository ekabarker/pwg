<?php
$id = $this->input->get("id");
$agenda = $this->M_Agenda->get($id)[0];

$myfile = fopen("agenda/" . $agenda->data, "r") or die("Unable to open file!");
$data = fread($myfile, filesize("agenda/" . $agenda->data));
fclose($myfile);

$myfile = fopen("agenda/sarana/" . $agenda->sarana, "r") or die("Unable to open file!");
$sarana = fread($myfile, filesize("agenda/sarana/" . $agenda->sarana));
fclose($myfile);

$footer = "footer_lihat_agenda.php";

?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10" style="margin: 0 auto">
                <div class="card card-primary card-outline  ">
                    <div class="card-header text-capitalize text-center">
                        <h3 class="card-title">

                            <h1><b><?php echo $agenda->judul ?></b></h1>

                        </h3>

                    </div>
                    <div class="card-body text-justify">
                        <?php echo $data ?>
                        <br>
                        <hr>
                        <div class="card-body box-profile">
                            <div class="card card-light">
                                <div class="card-header">
                                    <h3 class="card-title">Pelaksanaan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <table class="table">
                                            <thead></thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Tanggal</b></td>
                                                    <td><?php echo date('d F Y.', strtotime($agenda->pelaksanaan)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Waktu</b></td>
                                                    <td><?php echo date('H:i', strtotime($agenda->pelaksanaan)); ?> - selesai.</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Tempat</b></td>
                                                    <td><?php echo $agenda->tempat ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Sarana</b></td>
                                                    <td><?php echo $sarana ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 0 auto"><a href="?tampil=agenda&page=daftar_agenda"><button class="btn btn-primary">Kembali</button></a><br>
                        <div class="fb-share-button" id="btn-share" data-href="https://pwg.inditech.id/home?tampil=artikel&page=lihat_artikel&id=<?php echo $id ?>" data-layout="button_count">
                        </div>
                        <br />
                        <br />
                    </div><br>
                </div>
            </div>
        </div>
    </div>
</section>