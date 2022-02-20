<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php'; 
?>
<?php
if(empty($_POST) === false){
	$required_fields = array('current_password', 'password', 'password_again');
	foreach($_POST as $key=>$value){
		if(empty($value) && in_array($key, $required_fields) === true){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Fields marked with an asterisk are required.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
			break 1;
		}
	}
	if(md5($_POST['current_password']) === $user_data['password']){
		if(trim($_POST['password']) !== trim($_POST['password_again'])){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Your new password do not match.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}else if(strlen($_POST['password']) < 6){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Your Password must be atleast 6 characters.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}
	}else{
		$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Your current password is incorrect.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
	}
}
?>
        
    <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="youplay-banner banner-top youplay-banner-parallax small">
      <div class="image">
        <img class="jarallax-img" src="images/pro/1.jpg" alt="">
      </div>

      <div class="youplay-user-navigation">
        <div class="container">
          <ul>
            <li><a href="profile">Profile</a>
            </li>
            <li><a href="settings">Settings</a>
            </li>
            <li class="active"><a href="changepassword">Change Password </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="info">
        <div>
          <div class="container youplay-user">
			  
            <a href="<?php echo $user_data['profile'] ?>" class="angled-img image-popup">
				
              <div  class="img" id="four">
                <?php
 
   if(isset($_FILES['profile']) === true){
	   if(empty($_FILES['profile']['name']) === true){
		   echo 'Please choose a file!';
		 }else{
			$allowed = array('jpg', 'jpeg', 'gif', 'png');
			$file_name = $_FILES['profile']['name'];
			$file_extn = strtolower(end(explode('.', $file_name)));
			$file_temp = $_FILES['profile']['tmp_name'];
			
			if(in_array($file_extn, $allowed) === true){
				change_profile_image($session_user_id, $file_temp, $file_extn);
				header('Location: ' . $current_file);
				exit();
			} else{
				echo 'Incorrect file type. Allowed: ';
					echo implode(', ', $allowed);
			}
		 }
	 }
  
   if(empty($user_data['profile']) === false){
	   echo '<img src="', $user_data['profile'], '" alt="', $user_data['username'],'\'s Profile Images">';
	 }
 ?>
              </div>
              <i class="fa fa-search-plus icon"></i>
				</a>
            
            <!--
                -->
            <div class="user-data">
              <h2><?php echo $user_data['username']; ?></h2>
              <div class="activity">               
                  <h4><?php echo $level_name; ?></h4>               
              </div>
            </div>
          </div>
			
        </div>
      </div>
    </div>
    <!-- /Banner -->

    <div class="container youplay-content">

      <div class="row">

        <div class="col-md-9">
			<?php
if(isset($_GET['success']) === true && empty($_GET['success']) === true){
	echo '<script>
    setTimeout(function() {
        swal({
            title: "Thanksyou!",
            text: "Your Password has been change.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
}else{ 
	
	if(isset($_GET['force']) === true && empty($_GET['force']) === true){
		echo '<script>
    setTimeout(function() {
        swal({
            title: "Change Password",
            text: "Your must change your password now that youve requested.",
            type: "warning",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
	?>
       
	<?php
		
}
if(empty($_POST) === false && empty($errors) === true){
	change_password($session_user_id, $_POST['password']);
	echo '<script>
    setTimeout(function() {
        swal({
            title: "Thanksyou!",
            text: "Your Password has been change.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
	
}else if(empty($errors) === false){
	echo output_errors($errors);
}
?>

          <form action="" method="post">
            <h3>Change Password:</h3>
            <div class="form-horizontal mt-30 mb-40">
              <div class="form-group">
                <label class="control-label col-sm-2" for="cur_password">Current Password:</label>
                <div class="col-sm-10">
                  <div class="youplay-input">
                    <input type="password" id="cur_password" name="current_password" placeholder="Current Password">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="new_password">New Password:</label>
                <div class="col-sm-10">
                  <div class="youplay-input">
                    <input type="password" id="new_password" name="password" placeholder="New Password">
                  </div>
                </div>
              </div>
				<div class="form-group">
                <label class="control-label col-sm-2" for="new_password">Re-type Password:</label>
                <div class="col-sm-10">
                  <div class="youplay-input">
                    <input type="password" id="new_password" name="password_again" placeholder="Re-type Password">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Change Password</button>
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- Left Side -->
        <div class="col-md-3">
          <div class="side-block">
            <h4 class="block-title">About Site</h4>
            <div class="block-content">
              Gamers Origin is one of the best gaming site, doing its best to fullfill the needs of its gamers community, we are daily working to make our users satisfied and keep them up to date with the latest news and games.
            </div>
          </div>
          <div class="side-block">
            <h4 class="block-title">Location</h4>
            <div class="block-content pt-5">
              <div class="responsive-embed responsive-embed-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.7146155783385!2d67.05390593086258!3d24.94179018507814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f7d94053775%3A0x6dccc8afc58a8781!2sBlock%20L%20North%20Nazimabad%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1583942815860!5m2!1sen!2s"
                width="600" height="450"></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- Left Side -->

      </div>

    </div>
    
  </section>
  <!-- /Main Content -->

<?php 
}
	include 'includes/overall/footer.php'; 
?>
   