<?php
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php'; 
?>
        
     <!-- Main Content -->
  <section class="content-wrap full youplay-login">

    <!-- Banner -->
    <div class="youplay-banner banner-top">
      <div class="image">
        <img class="jarallax-img" src="images/recover/1.jpg" alt="">
      </div>

      <div class="info">
        <div>
          <div class="container align-center">
            <div class="youplay-form">
              <h1>Login</h1>

               
              <form action="login" method="post">
				  
                <div class="youplay-input">
                  <input type="text" name="username" placeholder="Username">
                </div>
			    <div class="youplay-input">
                  <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" value="Login" class="btn btn-default db">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->
  </section>
  <!-- /Main Content -->

    <?php include 'includes/overall/footer.php'; ?>