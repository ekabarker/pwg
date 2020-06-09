<?php
$footer = "footer_jadwal.php";
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
                <div class="form-group">
                    <label for="jadwal">Tanggal Libur</label><br>
                    <input type="date" id="jadwal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea name="catatan" id="catatan" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" onClick="submit()">Submit</button>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>