<?php
include 'core/init.php';
include 'includes/overall/header.php';
$user_query = mysql_query("Update `users` set status='0' where user_id='$session_user_id'");
session_destroy();
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


<?php
echo '<script>
    setTimeout(function() {
        swal({
            title: "Gamers Origin",
            text: "You have been logged out successfully!",
            type: "info",
        }, function() {
			window.location = "index";
        });
    }, 1000);
</script>';
?>

</section>
  <!-- /Main Content -->


<?php include 'includes/overall/footer.php'; ?>