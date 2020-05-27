<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $('.textarea-editor').summernote()

    function simpanAgenda(e) {

        var judul = $("#judul").val();
        var deskripsi = $("#deskripsi").val();
        var pelaksanaan = $("#pelaksanaan").val();
        var tempat = $("#tempat").val();
        var sarana = $("#sarana").val();
        $.ajax({
            url: "agenda/create",
            method: "POST",
            data: {
                judul: judul,
                deskripsi: deskripsi,
                pelaksanaan: pelaksanaan,
                tempat: tempat,
                sarana: sarana
            },
            success: function(result) {
                alert("Data berhasil disimpan");
            },
            error: function(err) {
                alert("Data gagal disimpan");
            }
        })
    }
</script>