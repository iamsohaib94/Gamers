</div>
	
    <?php include 'includes/footer.php'; ?>
    
    </section>
  <!-- /Main Content -->
	
 <!-- Search Block -->
  <div class="search-block">
    <a href="#" class="search-toggle fa fa-close"></a>
    <form action="search.php">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->

  <!-- Object Fit Polyfill -->
  <script type="text/javascript" src="assets/bower_components/object-fit-images/dist/ofi.min.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Hexagon Progress -->
  <script type="text/javascript" src="assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="assets/bower_components/bootstrap/dist/bootstrap.min.js"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="assets/bower_components/jarallax/dist/jarallax.min.js"></script>

  <!-- Flickity -->
  <script type="text/javascript" src="assets/bower_components/flickity/dist/flickity.pkgd.min.js"></script>

  <!-- Countdown -->
  <script type="text/javascript" src="assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>

  <!-- Moment.js -->
  <script type="text/javascript" src="assets/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

  <!-- Magnific Popup -->
  <script type="text/javascript" src="assets/bower_components/magnific-popup/dist/pop.js"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript" src="assets/plugins/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="assets/plugins/js/jquery.themepunch.revolution.min.js"></script>

  <!-- ImagesLoaded -->
  <script type="text/javascript" src="assets/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script>

  <!-- Isotope -->
  <script type="text/javascript" src="assets/bower_components/isotope/dist/isotope.pkgd.min.js"></script>

  <!-- Bootstrap Validator -->
  <script type="text/javascript" src="assets/bower_components/bootstrap-validator/dist/validator.min.js"></script>

  <!-- Bootstrap Sweetalert -->
  <script type="text/javascript" src="assets/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>

  <!-- Social Likes -->
  <script type="text/javascript" src="assets/bower_components/social-likes/dist/social-likes.min.js"></script>

  <!-- Youplay -->
  <script type="text/javascript" src="assets/youplay/js/youplay.min.js"></script>

  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,
    
            // set small navbar on load
            navbarSmall:      false,
    
            // enable fade effect between pages
            fadeBetweenPages: true,
    
            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet',
                instagram: './php/instagram/instagram'
            }
        });
    }
  </script>
	
	<!-- start-timer -->
	
	<script>
		function getTimeRemaining(endtime) {
     var t = Date.parse(endtime) - Date.parse(new Date());
     var seconds = Math.floor((t / 1000) % 60);
     var minutes = Math.floor((t / 1000 / 60) % 60);
     var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
     var days = Math.floor(t / (1000 * 60 * 60 * 24));
   return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
   };
 }

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
		
	</script>
	
     <!-- end timer -->
	
	<!-- start-smoth-scrolling -->
	
	     <script src="assets/bower_components/move/move-top.js"></script>
	       <script src="assets/bower_components/easing/easing.js"></script>
	
	    <script>
         $(document).ready(function () {
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         });
      </script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	
     <!-- end-smoth-scrolling -->

  


</body>
</html>