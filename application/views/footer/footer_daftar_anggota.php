<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    var tabel = $("#tabel").DataTable({
        "responsive": true,
        "autoWidth": false,
        ajax: {
            url: "anggota/getAll",
            dataSrc: function(data) {
                return data.map(function(d) {
                    return {
                        id: d.id,
                        nama: d.nama,
                        tgl_lahir: d.tanggal_lahir,
                        tmpt_lahir: d.tempat_lahir,
                        alamat: d.alamat,
                        agama: d.agama,
                        jk: d.jenis_kelamin,
                        username: d.username,
                        pass: d.password,
                        role: d.role,
                        aksi: "<a href='home?tampil=anggota&page=lihat_anggota&id=" + d.id + "'><button class='btn btn-primary'>Lihat</button></a> <a href='home?tampil=anggota&page=edit_anggota&id=" + d.id + "'><button class='btn btn-success'>Edit</button></a> <button onClick='deleteAnggota(" + d.id + ")' class='btn btn-danger'>Hapus</button>"
                    }
                });
            }
        },
        columns: [{
                data: "nama"
            },
            {
                data: "username"
            },
            {
                data: "role"
            },
            {
                data: "aksi"
            }
        ]
    });

    function deleteAnggota(id) {
        if (confirm("Apakah anda yakin ingin menghapus Anggota ini?")) {
            $.ajax({
                url: "anggota/delete",
                method: "POST",
                data: {
                    id: id
                },
                success: function() {
                    alert("Anggota berhasil dihapus");
                    tabel.ajax.reload();
                },
                error: function() {
                    alert("Anggota gagal dihapus");
                    tabel.ajax.reload();
                }
            })
        }

    }
</script>