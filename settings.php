<?php
include 'core/init.php';
include 'includes/overall/header.php'; 

if(empty($_POST) === false){
	$required_fields = array('username','last_name', 'email');
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
	
	if(empty($errors) === true){
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "A valid email address is required.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}else if(email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Sorry, the email \'' . $_POST['email'] . '\' is already in use.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}
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
            <li class="active"><a href="settings">Settings</a>
            </li>
            <li><a href="changepassword">Change Password </a>
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
            title: "Success!",
            text: "Your details have been updated.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
			window.location = "";
        });
    }, 1000);
</script>';
}else{ 	
if(empty($_POST) === false && empty($errors) === true){
		
	$update_data = array(
	  'username'     => $_POST['username'],
	  'last_name'      => $_POST['last_name'],
	  'email'          => $_POST['email'],
	  'allow_email'    => ($_POST['allow_email'] == 'on') ? 1 : 0
	);
	
	update_user($session_user_id, $update_data);
	echo '<script>
    setTimeout(function() {
        swal({
            title: "Success!",
            text: "Your details have been updated.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
			window.location = "";
        });
    }, 1000);
</script>';
	
}else if(empty($errors) === false){
	echo output_errors($errors);
}
?>
          <form action="" method="post" enctype="multipart/form-data">
            <h3>Settings:</h3>
            <div class="form-horizontal mt-30 mb-40">
              <div class="form-group">
                <label class="control-label col-sm-2" for="new_email">Username:</label>
                <div class="col-sm-10">
                  <div class="youplay-input">
                    <input type="text" value="<?php echo $user_data['username']; ?>" name="username">
                  </div>
                </div>
              </div>
            </div>
			  
            <div class="form-horizontal mt-30 mb-40">
              <div class="form-group">
                <label class="control-label col-sm-2" for="new_email">Last Name:</label>
                <div class="col-sm-10">
                  <div class="youplay-input">
                    <input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>">
                  </div>
                </div>
              </div>
            </div>
			  
            <div class="form-horizontal mt-30 mb-40">
              <div class="form-group">
                <label class="control-label col-sm-2" for="new_email">Email:</label>
                <div class="col-sm-10">
                  <div class="youplay-input">
                    <input type="text" name="email" value="<?php echo $user_data['email']; ?>">
                  </div>
                </div>
              </div>
            </div>
			  
			  <h3>Notifications:</h3>
            <div class="form-horizontal mt-30 mb-40">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="youplay-checkbox">
                    <input type="checkbox" name="allow_email" id="appearance" <?php if($user_data['allow_email'] == 1) {echo 'checked="checked"'; } ?>>
                    <label for="appearance">Would you like to receive notifications from us?</label>
                  </div>
                </div>
              </div>
            </div>
			  
			  <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" value="Update">Update</button>
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
   