<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>

    var tabel = $("#tabel").DataTable({
        ajax: {
            url: "anggota/getAll",
            dataSrc: ''
        },
        columns: [
            {data: "nama"},
            {data: "tanggal_lahir"},
            {data: "username"},
            {data: "role"}
        ]
    })

</script>