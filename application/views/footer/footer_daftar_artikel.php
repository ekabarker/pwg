<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  var role = $("#role").val();
  var tabel_artikel = $("#tabel_artikel").DataTable({
    "responsive": true,
    "autoWidth": false,
    "ajax": {
      url: "artikel/getAll",
      dataSrc: function(data) {
        return {
          id: d.id,
          judul: d.judul,
          sub_judul: d.sub_judul,
          tanggal: d.tanggal
        }
      }
    },
    columns: [{
      data: "aksi"
    }]
  });
  var tabel = $("#tabel").DataTable({
    "responsive": true,
    "autoWidth": false,
    "ajax": {
      url: "artikel/getAll",
      dataSrc: function(data) {
        return data.map(function(d) {
          var aksi = "<a href='home?tampil=artikel&page=lihat_artikel&id=" + d.id + "'><button class='btn btn-primary'>Lihat</button></a> ";
          if (role == 'admin') {
            aksi += "<a href='home?tampil=artikel&page=edit_artikel&id=" + d.id + "'><button class='btn btn-success'>Edit</button></a> <button onClick='deleteArtikel(" + d.id + ")' class='btn btn-danger'>Hapus</button>";
          }

          return {
            id: d.id,
            judul: d.judul,
            sub_judul: d.sub_judul,
            tanggal: d.tanggal,
            aksi: aksi
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

  function deleteArtikel(id) {
    if (confirm("Apakah anda yakin ingin menghapus artikel ini?")) {
      $.ajax({
        url: "artikel/delete",
        method: "POST",
        data: {
          id: id
        },
        success: function() {
          alert("Artikel berhasil dihapus");
          tabel.ajax.reload();
        },
        error: function() {
          alert("Artikel gagal dihapus");
          tabel.ajax.reload();
        }
      })
    }

  }
</script>