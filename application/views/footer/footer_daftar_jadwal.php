<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar/main.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.js"></script>
<script>
    var calendar;
    $(function () {
        var calendarEl = document.getElementById('calendar');
        calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid', 'bootstrap'],
            editable: true,
            events: [],
            eventClick: function(event) {
                if(confirm("Apakah anda ingin menghapus jadwal ini?")) {
                    $.ajax({
                        url: 'pengobatan/delete_libur',
                        method: 'POST',
                        data: {
                            id: event.event.id
                        },
                        success: function() {
                            window.location.reload();
                        }
                    });
                }
                
            }
        });
        calendar.render();

        $.ajax({
            url: 'pengobatan/get_libur',
            method: 'GET',
            success: function(data) {
                data = JSON.parse(data);
                data.forEach(function(libur) {
                    var event = {
                        id: libur.id,
                        title: libur.catatan,
                        start: new Date(libur.tanggal),
                        end: new Date(libur.tanggal),
                        backgroundColor: '#f56954',
                        borderColor: '#f56954',
                        allDay: true
                    }
                    
                    calendar.addEvent(event);
                });
            }
        })
    });
    
</script>