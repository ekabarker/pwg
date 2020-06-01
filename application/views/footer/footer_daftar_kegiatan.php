<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>

  var tabel = $("#tabel").DataTable({
    "responsive": true,
    "autoWidth": false,
    "ajax": {
      url: "kegiatan/getAll",
      dataSrc: function(data) {
        return data.map(function(d) {
          return {
            id: d.id,
            judul: d.judul,
            tanggal: d.tanggal,
            aksi: "<a href='home?tampil=kegiatan&page=lihat_kegiatan&id=" + d.id + "'><button class='btn btn-primary'>Lihat</button></a> <a href='home?tampil=kegiatan&page=edit_kegiatan&id=" + d.id + "'><button class='btn btn-success'>Edit</button></a> <button onClick='deleteKegiatan(" + d.id + ")' class='btn btn-danger'>Hapus</button>"
          }
        });
      }
    },
    columns: [{
        data: "id"
      },
      {
        data: "judul"
      },
      {
        data: "tanggal"
      },
      {
        data: "aksi"
      }
    ]
  });

  function deleteKegiatan(id) {
    if (confirm("Apakah anda yakin ingin menghapus Kegiatan ini?")) {
      $.ajax({
        url: "kegiatan/delete",
        method: "POST",
        data: {
          id: id
        },
        success: function() {
          alert("Kegiatan berhasil dihapus");
          tabel.ajax.reload();
        },
        error: function() {
          alert("Kegiatan gagal dihapus");
          tabel.ajax.reload();
        }
      })
    }

  }
</script>