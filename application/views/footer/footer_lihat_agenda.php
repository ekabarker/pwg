<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <script>
  
    function send_email(id) {
      var url = window.location.href;
      $.ajax({
        url: 'agenda/send_email',
        method: 'POST',
        data: {
          id: id,
          url: url
        },
        success: function() {
          alert('Berhasil membagikan ke email');
        },
        error: function() {
          alert('Gagal membagikan ke email');
        }
      })

    }

  </script>
  