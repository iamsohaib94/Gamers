<?php
include 'core/init.php';
include 'includes/overall/header.php';

?>



        
      <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="youplay-banner youplay-banner-parallax banner-top small">
      <div class="image">
        <img class="jarallax-img" src="images/contact/1.jpg" alt="">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->

     <!-- Google Map -->
            <div id="google-map" class="youplay-gmaps"></div>
            <script src="https://maps.google.com/maps/api/js?key=AIzaSyBlQNaWM2_jxXJbRwL2ozXWw3cg-uuld8w&sensor=false"></script>
            <script>
                function initializeGmaps()
                {
                    var LatLng = {
                        lat: 24.942402,
                        lng: 67.053950
                    };
                    var mapCanvas = document.getElementById('google-map');
                    var mapOptions = {
                        center: LatLng,
                        scrollwheel: false,
                        zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        backgroundColor: 'none',
                        styles: [
                        {
                            stylers: [
                            {
                                invert_lightness: true
                            },
                            {
                                hue: '#0033ff'
                            },
                            {
                                saturation: 41
                            },
                            {
                                lightness: 0
                            },
                            {
                                visibility: 'simplified'
                            }]
                        }]
                    }
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker(
                    {
                        position: LatLng,
                        map: map
                    });
                }
                google.maps.event.addDomListener(window, 'load', initializeGmaps);
            </script>
            <!-- /Google Map -->

    <div class="container youplay-content">

      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <!-- Contact Form -->
          <div class="youplay-form p-0">

            <form action="php/contact.php" method="POST" role="form" class="youplay-form-ajax" data-toggle="validator">
              <div class="row">
                <div class="col-md-6">
                  <div class="youplay-input form-group">
                    <input type="text" name="name" placeholder="Name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="youplay-input form-group">
                    <input type="email" name="email" placeholder="Email" required>
                  </div>
                </div>
				  <div class="col-md-6">
                  <div class="youplay-input form-group">
                    <input type="text" name="name" placeholder="Subject" required>
                  </div>
                </div>
              </div>
              <div class="youplay-textarea form-group">
                <textarea name="message" placeholder="Message" rows="5" required></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
          <!-- /Contact Form -->
        </div>
        <div class="col-md-3 col-md-pull-9">
          <h2 class="mt-0">Contact info</h2>
          Near North Nazimabad Chowrangi,
          <br>Karachi, KHI 75850
          <br>
          <br>Phone: +92 341 3095267
          <br>Email: <a href="#">sohaibhassan03@gmail.com</a>
          <br>Web: <a href="#">GamersOrigin</a>
          <br>
          <br>
        </div>
      </div>

    </div>

  </section>
  <!-- /Main Content -->



    <?php include 'includes/overall/footer.php'; ?>