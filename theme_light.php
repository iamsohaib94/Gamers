<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gamers Origin</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Icon -->
  <link rel="icon" type="image/png" href="images/icon/icon.png">
  <!-- Google Fonts -->

  <link href="../assets/bower_components/font-awesome/fontss.css" rel='stylesheet' type='text/css'>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/font-awesome/css/font-awesome.min.css" />
	
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/font-awesome/fontss.css" />
	
  <!-- Flickity -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/flickity/dist/flickity.min.css" />

  <!-- Magnific Popup -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/magnific-popup/dist/magnific-popup.css" />

  <!-- setting -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/setting_1.css" />

  <!-- Bootstrap Sweetalert -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" />

  <!-- Social Likes -->
  <link rel="stylesheet" type="text/css" href="assets/bower_components/social-likes/dist/social-likes_flat.css" />

	
  <!-- Youplay -->
	<link rel="stylesheet" type="text/css" href="assets/youplay/css/light.css" />

  <!-- Google Maps API -->
  <script src="assets/bower_components/google/google.js"></script>
</head>


<body>

 <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="images/logo/logo_1.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
         <img src="images/logo/logo_1.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover ">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      About <span class="caret"></span> <span class="label">us</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="##">About Us</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Blog <span class="caret"></span> <span class="label">news</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="##">abc</a>
                </li>
                <li><a href="##">xyz</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Features <span class="caret"></span> <span class="label">full list</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li class="dropdown dropdown-submenu pull-left ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="##">Profile</a>
                      </li>
                      <li><a href="##">Setting</a>
                      </li>
                      <li><a href="##">Change Password</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href="##">abc</a>
                </li>
                <li><a href="##">xyz</a>
                </li>
                <li><a href="##">abc</a>
                </li>               
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <li class="dropdown dropdown-hover dropdown-user">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
              <i class="fa fa-user"></i>
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu">
              <form class="navbar-login-form" action="#" method="post">
                <p>Username:</p>
                <div class="youplay-input">
                  <input type="text" name="log">
                </div>

                <p>Password:</p>
                <div class="youplay-input">
                  <input type="password" name="pwd">
                </div>

                <div class="youplay-checkbox mb-15 ml-5">
                  <input type="checkbox" name="rememberme" value="forever" id="nav-rememberme">
                  <label for="nav-rememberme">Remember Me</label>
                </div>

                <button class="btn btn-sm ml-0 mr-0" name="submit">Log In</button>
                <br>

                <p>
                  <a class="no-fade" href="##">Lost password?</a> | <a href="##" class="no-fade" data-toggle="modal" data-target="#nav-registration">Register</a>
                </p>
              </form>
            </div>
          </li>
			<li>
            <a class="search-toggle" href="search.html">
              <i class="fa fa-search"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

  <!-- Registration Form -->
  <div id="nav-registration" class="modal fade" style="display:none;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"><span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div>
              <p>Username:</p>
              <div class="youplay-input">
                <input type="text" name="user_login" />
              </div>

              <p>E-mail:</p>
              <div class="youplay-input">
                <input type="text" name="user_email" />
              </div>

              <p>
                <em>A password will be e-mailed to you.</em>
              </p>

              <button class="btn ml-3" name="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Registration Form -->


  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top youplay-banner-parallax">
      <div class="image">
        <img class="jarallax-img" src="images/select/5.jpg" alt="">
      </div>

      <div class="info">
        <div>
          <div class="container" >
            <h1>Welcome to <br>Gamers Origin</h1>
            <em>"One of the best gaming site"</em>
          </div>
        </div>
      </div>
    </section>
    <!-- /Banner -->

    <!-- /image -->

    <div class="youplay-carousel" data-autoplay="5000">
		
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/1.jpg" alt="">
        </div>
		<div class="over-info">
          <div>
            <div>
              <h4>Action</h4>
            </div>
          </div>
		</div>
	  </a>
		
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/2.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Adventure</h4>
            </div>
          </div>
		</div>
      </a>
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/3.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>RPG</h4>
            </div>
          </div>
		</div>
      </a>
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/4.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Simulation</h4>
            </div>
          </div>
		</div>
      </a>
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/5.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Strategy</h4>
            </div>
          </div>
		</div>
      </a>
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/6.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Sports</h4>
            </div>
          </div>
		</div>
      </a>
      <a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/7.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Horror</h4>
            </div>
          </div>
		</div>
      </a>
		<a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/8.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Shooter</h4>
            </div>
          </div>
		</div>
      </a>
		<a class="angled-img" href="##">
        <div class="img">
          <img src="images/index/9.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Racing</h4>
            </div>
          </div>
		</div>
      </a>
    </div>
	  
    <!-- /image end -->

    <!-- Specials -->
    <h2 class="container h1"> RECENT </h2>
	  
    <div class="youplay-carousel" data-autoplay="5000">
      <a class="angled-img" href="##">
        <div class="img img-offset">
          <img src="images/recent/1.jpg" alt="">
        </div>
        <div class="bottom-info">
          <h4>Project Cars</h4>
        </div>
      </a>
      <a class="angled-img" href="##">
        <div class="img img-offset">
          <img src="images/recent/2.jpg" alt="">
        </div>
        <div class="bottom-info">
          <h4>Outlast</h4>
        </div>
      </a>
      <a class="angled-img" href="##">
        <div class="img img-offset">
          <img src="images/recent/3.jpg" alt="">
        </div>
        <div class="bottom-info">
          <h4>Need for Speed Payback</h4>
        </div>
      </a>
      <a class="angled-img" href="##">
        <div class="img img-offset">
          <img src="images/recent/4.jpg" alt="">
        </div>
        <div class="bottom-info">
          <h4>Naruto Shippudden 4</h4>
        </div>
      </a>
      <a class="angled-img" href="##">
        <div class="img img-offset">
          <img src="images/recent/5.jpg" alt="">
        </div>
        <div class="bottom-info">
          <h4>Tom Clancy's Ghost Recon</h4>
        </div>
      </a>
		<a class="angled-img" href="##">
        <div class="img img-offset">
          <img src="images/recent/6.jpg" alt="">
        </div>
        <div class="bottom-info">
          <h4>Carmageddon</h4>
        </div>
      </a>
    </div>
    <!-- /Specials -->


     <!-- Main Content -->
  <h2 class="container h1"> UPCOMING </h2>
  <section class="content-wrap full">

    <!-- Preorder -->
    <section class="youplay-banner">
      <div class="image">
        <img class="jarallax-img" src="images/select/4.jpg" alt="">
      </div>

      <div class="info container align-center">
        <div>

          <h2>RISE OF THE<br> TOMB RAIDER</h2>

          <!-- See countdown init in bottom of the page -->
          <div class="countdown h2" data-end="2019-05-21 12:00" data-timezone="EST"></div>

        </div>
      </div>
    </section>
    <!-- /Preorder -->

  </section>
  <!-- /Main Content -->

   <!-- Latest News -->
    <h2 class="container h1">Latest News</h2>
    <section class="youplay-news container">
      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="##" class="angled-img">
              <div class="img">
                <img src="images/select/3.jpg" alt="">
              </div>
              <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span>
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="##">Road Not Taken - First Try!</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>
            </div>
            <div class="tags">
              <i class="fa fa-tags"></i>  <a href="##">Road Not Taken, first try, newbie game</a> 
            </div>
            <div class="description">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p>
              <p>
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
            </div>
            <a href="##" class="btn read-more pull-left">Read More</a>
          </div>
        </div>
      </div>
      <!-- /Single News Block -->

      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="##" class="angled-img">
              <div class="img">
                <img src="images/select/3.jpg" alt="">
              </div>
              <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9 out of 10"><span>9</span>
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="##">Coming to Gamers Origin - Botanicula</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> March 9, 2018</span>
            </div>
            <div class="tags">
              <i class="fa fa-tags"></i>  <a href="##">Botanicula, coming soon, first review, sale date</a>
            </div>
            <div class="description">
              Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.
            </div>
            <a href="##" class="btn read-more pull-left">Read More</a>
          </div>
        </div>
      </div>
      <!-- /Single News Block -->

      <!-- Single News Block -->
      <div class="news-one">
        <div class="row vertical-gutter">
          <div class="col-md-4">
            <a href="##" class="angled-img">
              <div class="img">
                <img src="images/select/3.jpg" alt="">
              </div>
              <div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="3.8 out of 10"><span>3.8</span>
              </div>
            </a>
          </div>
          <div class="col-md-8">
            <div class="clearfix">
              <h3 class="h2 pull-left m-0"><a href="##">Review Journey</a></h3>
              <span class="date pull-right"><i class="fa fa-calendar"></i> March 1, 2018</span>
            </div>
            <div class="tags">
              <i class="fa fa-tags"></i>  <a href="##">Journey, game, review</a>
            </div>
            <div class="description">
              Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </div>
            <a href="##" class="btn read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- /Single News Block -->
    </section>
    <!-- /Latest News -->


    <!-- Partners -->
    <section class="youplay-banner youplay-banner-parallax small mt-80">
      <div class="image">
        <img class="jarallax-img" src="images/select/2.jpg" alt="">
      </div>

      <div class="info align-center">
        <div>
          <h2 class="mb-40">Partners</h2>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">

              <div class="youplay-carousel youplay-carousel-size-6" data-autoplay="6000" data-arrows="false" data-stage-padding="0">
                <a href="##">
                  <img src="images/select/img_1/1.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/2.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/3.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/4.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/5.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/6.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/7.png" alt="">
                </a>
                <a href="##">
                  <img src="images/select/img_1/8.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Partners -->

     <!-- Features -->
    <h2 class="container h1">Why Gamers Origin</h2>
    <section class="youplay-features container">
      <div class="col-md-3 col-sm-6">
        <a class="feature angled-bg" href="##">
          <i class="fa fa-cc-visa"></i>
          <h3>Payment</h3>
          <small>No payment just become our member and games are yours</small>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-gamepad"></i>
          <h3>Games</h3>
          <small>A large number of games that you will love to play</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-support"></i>
          <h3>Support</h3>
          <small>We not only help you in gaming also in making websites</small>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="feature angled-bg">
          <i class="fa fa-users"></i>
          <h3>Community</h3>
          <small>The best gaming community around the world</small>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="youplay-footer-parallax">
      <div class="wrapper" style="background-image: url('images/footer/1.jpg')">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Connect socially with <strong>Gamers Origin</strong></h3>

            <div class="social-icons">
              <div class="social-icon">
                <a href="#">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>Gamers Origin</strong> &copy; 2020. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#" class="search-toggle fa fa-close"></a>
    <form action="search.html">
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
  <script type="text/javascript" src="assets/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

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
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
  </script>


  <script type="text/javascript">
    $(".countdown").each(function() {
        var tz = $(this).attr('data-timezone');
        var end = $(this).attr('data-end');
            end = moment.tz(end, tz).toDate();
        $(this).countdown(end, function(event) {
            $(this).html(
                event.strftime([
                    '<div class="countdown-item">',
                        '<span>Days</span>',
                        '<span><span>%D</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                        '<span>Hours</span>',
                        '<span><span>%H</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                        '<span>Minutes</span>',
                        '<span><span>%M</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                        '<span>Seconds</span>',
                        '<span><span>%S</span></span>',
                    '</div>'
                ].join(''))
            );
        });
    })
  </script>
	
	<!-- start-Disable Right Click -->
	
	<script type="text/javascript">
         $(document).ready(function() {
         	$('body').bind('cut copy paste', function(e){
         		e.preventDefault();
         	})
			 $("body").on("contextmenu", function(e){
				 return false;
         })
			 })
      </script>
	
     <!-- end-Disable Right Click -->

</body>

</html>
