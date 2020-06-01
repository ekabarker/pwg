<script>
    var jadwal = $("#jadwal");
    var jam = $("#jam");
    jadwal.change(function() {
        requestTime();
    });
    
    function requestTime() {
        $.ajax({
            url: 'pengobatan/check_date?tanggal='+jadwal.val(),
            method: 'GET',
            success: function(data) {
                data = JSON.parse(data);
                jam.empty();
                for(let i = 0; i<data.length; i++) {
                    jam.append("<option value='"+data[i].id+"'>"+data[i].jam+"</option>");
                }
            }
        })
    }

    function submit() {
        var jenis = $("#jenis").val();
        var deskripsi = $("#deskripsi").val();
        if(!jam.val()) {
            alert("Pilih jam yang tersedia");
            return;
        }
        $.ajax({
            url: 'pengobatan/create',
            method: 'POST',
            data: {
                tanggal: jadwal.val(),
                jam_id: jam.val(),
                jenis_pengobatan_id: jenis,
                deskripsi: deskripsi
            },
            success: function(data) {
                alert('Berhasil mendaftar');
                // location.reload();
                window.location.href = "?page=daftar_pengobatan";
            },
            error: function(err) {
                alert('Gagal mendaftar');
            }
        })
    }
</script>