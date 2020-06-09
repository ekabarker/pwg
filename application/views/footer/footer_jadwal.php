
<script>
    function submit() {
        var tanggal = $("#jadwal").val();
        var catatan = $("#catatan").val();
        $.ajax({
            url: 'pengobatan/libur',
            method: 'POST',
            data: {
                tanggal: tanggal,
                catatan: catatan
            },
            success: function() {
                alert('Berhasil menyimpan data')
                window.location.reload();
            },
            error: function() {
                alert('Tanggal sudah dipilih');
            }
        })
    }
</script>