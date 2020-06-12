<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $('.textarea-editor').summernote()

    function simpanArtikel(e) {
        var data = $("#artikel-editor").val();
        var judul = $("#judul").val();
        var sub_judul = $("#sub_judul").val();
        $.ajax({
            url: "artikel/create",
            method: "POST",
            data: {
                judul: judul,
                sub_judul: sub_judul,
                data: data
            },
            success: function(result) {
                alert("Data berhasil disimpan");
                window.location.href = "?tampil=artikel&page=daftar_artikel";
            },
            error: function(err) {
                alert("Data gagal disimpan");
            }
        })
    }
</script>