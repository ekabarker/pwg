<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $('.textarea-editor').summernote()

    function simpanKegiatan(e) {
        var data = $("#deskripsi").val();
        var judul = $("#judul").val();
        $.ajax({
            url: "kegiatan/create",
            method: "POST",
            data: {
                judul: judul,
                data: data
            },
            success: function(result) {
                alert("Data berhasil disimpan");
                window.location.href = "?tampil=kegiatan&page=daftar_kegiatan";
            },
            error: function(err) {
                alert("Data gagal disimpan");
            }
        })
    }
</script>