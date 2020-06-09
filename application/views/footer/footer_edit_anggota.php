<!-- Summernote -->
<script>
    function simpanAnggota() {
        var nama = $("#nama").val();
        var tanggal_lahir = $("#tgl_lahir").val();
        var tempat_lahir = $("#tmpt_lahir").val();
        var alamat = $("#alamat").val();
        var no_tlp = $("#no_tlp").val();
        var agama = $("#agama").val();
        var jk = $("#jk").val();
        var username = $("#username").val();
        $.ajax({
            url: "anggota/update",
            method: "POST",
            data: {
                nama: nama,
                tanggal_lahir: tanggal_lahir,
                tempat_lahir: tempat_lahir,
                alamat: alamat,
                no_tlp: no_tlp,
                agama: agama,
                jk: jk,
                username: username,
                id: <?php echo $id ?>
            },
            success: function(result) {
                alert("Data berhasil disimpan");
            },
            error: function(err) {
                alert("Data gagal disimpan");
            }
        })
    }

    function ubahPassword() {
        var password = $("password").val();
        var new_password = $("new_password1").val();
        $.ajax({
            url: "anggota/ubahPassword",
            method: "POST",
            data: {
                password: password,
                new_password1: new_password1,
                id: <?php echo $id ?>
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