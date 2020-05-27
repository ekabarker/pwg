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
      url: "agenda/getAll",
      dataSrc: function(data) {
        return data.map(function(d) {
          return {
            id: d.id,
            judul: d.judul,
            deskripsi: d.data,
            pelaksanaan: d.pelaksanaan,
            tempat: d.tempat,
            sarana: d.sarana,
            tanggal: d.tanggal,
            aksi: "<a href='home?tampil=agenda&page=lihat_agenda&id=" + d.id + "'><button class='btn btn-primary'>Lihat</button></a> <a href='home?tampil=agenda&page=edit_agenda&id=" + d.id + "'><button class='btn btn-success'>Edit</button></a> <button onClick='deleteAgenda(" + d.id + ")' class='btn btn-danger'>Hapus</button>"
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
        data: "pelaksanaan"
      },
      {
        data: "aksi"
      }
    ]
  });

  function deleteAgenda(id) {
    if (confirm("Apakah anda yakin ingin menghapus agenda ini?")) {
      $.ajax({
        url: "agenda/delete",
        method: "POST",
        data: {
          id: id
        },
        success: function() {
          alert("Agenda berhasil dihapus");
          tabel.ajax.reload();
        },
        error: function() {
          alert("Agenda gagal dihapus");
          tabel.ajax.reload();
        }
      })
    }

  }
</script>