<?php
include 'core/init.php';
include 'includes/overall/header.php'; 
?>
        
      <!-- Main Content -->
  <section class="content-wrap full youplay-login">

    <!-- Banner -->
    <div class="youplay-banner banner-top">
      <div class="image">
        <img class="jarallax-img" src="images/recover/1.jpg" alt="">
      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br      ><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
    </div>
    <!-- /Banner -->
    <?php echo '<script>
    setTimeout(function() {
        swal({
            title: "Gamers Origin",
            text: "Welcome \'' . $user_data['username'] . '\'",
            type: "success",
        }, function() {
			window.location = "index";
        });
    }, 1000);
</script>';?>
    
  </section>
  <!-- /Main Content -->


    <?php include 'includes/overall/footer.php'; ?>