<?php
include 'core/init.php';
logged_in_redirect();
if(empty($_POST) === false){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username) === true || empty($password) === true){
		$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "You need to enter a username and password.",
            type: "error",
			confirmButtonText: "OK"
        }, function() { 
        });
    }, 1000);
</script>';
	}	else if(user_exists($username) === false){
		$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "We cannot find that username. Have you registered?.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
	} else if(user_active($username) === false){
		$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "You have not activated your account!.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
	} else{
		
		if(strlen($password) > 32) {
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Password too long.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}
		
		$login = login($username, $password);
		if($login === false){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "That username/password combination is incorrect.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}else{
			$_SESSION['user_id'] = $login;
			header('Location: welcome');
			exit();
		}
	}
}
include 'includes/overall/header.php';
if(empty($errors) === false) {
	
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
    
  </section>
  <!-- /Main Content -->

<?php	

    echo output_errors($errors);
	 
}
include 'includes/overall/footer.php';
?>