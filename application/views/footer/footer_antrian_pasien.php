<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    var tabel = $("#tabel").DataTable({
        ajax: {
            url: 'pengobatan/getAll',
            dataSrc: function(data) {
                return data.map(function(item) {
                    var status = "Menunggu";
                    if(item.status == 1) {
                        status = "Selesai";
                    } else if(item.status == 2) {
                        status = "Dibatalkan";
                    }
                    var aksi = "<a href='home?page=lihat_pengobatan&id=" + item.id + "'><button class='btn btn-primary'>Lihat</button></a>";
                    if(item.status == 0) {
                        aksi += " <button onClick='konfirmasi(" + item.id + ")' class='btn btn-success'>Konfirmasi</button> <button onClick='batalkan(" + item.id + ")' class='btn btn-danger'>Batalkan</button>";
                    }
                    return {
                        id: item.id,
                        nama_anggota: item.nama_anggota,
                        tanggal: item.tanggal,
                        jam: item.jam,
                        status: status,
                        aksi: aksi
                    };
                });
            }
        },
        columns: [
            {data: 'id'},
            {data: 'nama_anggota'},
            {data: 'tanggal'},
            {data: 'jam'},
            {data: 'status'},
            {data: 'aksi'}
        ]
    })

    function konfirmasi(id) {
        $.ajax({
            url: "pengobatan/konfirmasi",
            method: "POST",
            data: {
                id: id
            },
            success: function() {
                alert("Berhasil mengkonfirmasi")
                location.reload();
            },
            error: function() {
                alert("Gagal mengkonfirmasi")
                location.reload();
            }
        })
    }

    function batalkan(id) {
        $.ajax({
            url: "pengobatan/batalkan",
            method: "POST",
            data: {
                id: id
            },
            success: function() {
                alert("Berhasil membatalkan")
                location.reload();
            },
            error: function() {
                alert("Gagal membatalkan")
                location.reload();
            }
        })
    }
</script>