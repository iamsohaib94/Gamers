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
              <h1>Recover</h1>

              <div class="btn-group social-list dib">
                Tip: Always write your Username on your note book so you won't forget it :)
              </div>
				
				<?php
                if(isset($_GET['success']) === true && empty($_GET['success']) === true){
					echo '<script>
    setTimeout(function() {
        swal({
            title: "Welcome!",
            text: "Thanks, we emailed you.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
	            ?>
                <?php
	
               }else{
                  $mode_allowed = array('username', 'password');
                  if(isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true){
			      if(isset($_POST['email']) === true && empty($_POST['email']) === false){
				  if(email_exists($_POST['email']) === true){
				  recover($_GET['mode'], $_POST['email']);
				  echo '<script>
    setTimeout(function() {
        swal({
            title: "Welcome!",
            text: "Thanks, we emailed you.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
				}else{
					echo '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Oops, we couldn\'t find that email address.",
            type: "info",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
				}
			  }
	           ?>
               
              <form action="" method="post">
				  Please enter your Email address:<br><br>
                <div class="youplay-input">
                  <input type="email" name="email" placeholder="Email">
                </div>
                <button type="submit" value="Recover" class="btn btn-default db">Recover</button>
              </form>
				<?php
                }else{
			       header('Location: index');
		           exit();
		             }
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->
  </section>
  <!-- /Main Content -->


    <?php include 'includes/overall/footer.php'; ?>