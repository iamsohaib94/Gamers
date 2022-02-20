<?php
include 'core/init.php';
include 'includes/overall/header.php'; 
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
            <li class="active"><a href="profile"> Profile</a>
            </li>
            <li><a href="settings"> Settings</a>
            </li>
            <li><a href="changepassword"> Change Password </a>
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
		   echo '<script>
    setTimeout(function() {
        swal({
            title: "Oops!",
            text: "Please choose a file!",
            type: "warning",
			confirmButtonText: "OK"
        }, function() {
			window.location = "profile?error";
        });
    }, 1000);
</script>';
		 }else{
			$allowed = array('jpg', 'jpeg', 'gif', 'png');
			$file_name = $_FILES['profile']['name'];
			$file_extn = strtolower(end(explode('.', $file_name)));
			$file_temp = $_FILES['profile']['tmp_name'];
			
			$file_size = $_FILES['profile']['size'];
			
			
			if(in_array($file_extn, $allowed) === true){
				change_profile_image($session_user_id, $file_temp, $file_extn);
				echo '<script>
    setTimeout(function() {
        swal({
            title: "Success!",
            text: "Your Profile have been updated.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
			window.location = "profile?success";
        });
    }, 1000);
</script>';
			}else if($file_size < 1000000){
					echo '<script>
    setTimeout(function() {
        swal({
            title: "Oops!",
            text: "Your max file size.",
            type: "warning",
			confirmButtonText: "OK"
        }, function() {
			window.location = "profile?error";
        });
    }, 1000);
</script>';
								
				 
			}else{
				echo '<script>
    setTimeout(function() {
        swal({
            title: "Oops!",
            text: "You max file.",
            type: "warning",
			confirmButtonText: "OK"
        }, function() {
			window.location = "profile?error";
        });
    }, 1000);
</script>';
					
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="inp">
                  <label class="custom-upload">
                     <span class="fa fa-eye"></span>
                        Click
                      <input type="file" name="profile">
                   </label>
                   <button type="submit" value="upload" class="btn btn-sm">Upload</button>
                  </div>
	                 
                </form>
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

          <h3 class="mt-0 mb-20">Personal Information</h3>
          <table class="table table-bordered">
			  <?php
           $list_query = mysql_query("Select user_id, reg_date from users WHERE username='$username'");
           while($run_list = mysql_fetch_array($list_query)){
	       $user_id = $run_list['user_id'];
	       $reg_date = $run_list['reg_date'];
	       $reg_date = date('d-M-Y', strtotime($reg_date));
	       ?>
            <tbody>
              <tr>
                <td style="width: 200px;">
                  <p>Member Since:</p>
                </td>
                <td>
                  <p><?php echo $reg_date ?></p>
                </td>
              </tr>
				<?php } ?>
				<tr>
                <td>
                  <p>User ID:</p>
                </td>
                <td>
                  <p><?php echo $user_data['user_id']; ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>Website Level:</p>
                </td>
                <td>
                  <p><?php
             if($user_level == '1'){
	        	echo "Owner";
	         }else if($user_level == '0'){
		       echo "Member";
	         }else if($user_level == '2'){
		       echo "Developer";
	         }
					  
	         ?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>First Name:</p>
                </td>
                <td>
                  <p><?php echo $user_data['first_name']; ?></p>
                </td>
              </tr>
				<tr>
                <td>
                  <p>Last Name:</p>
                </td>
                <td>
                  <p><?php echo $user_data['last_name']; ?></p>
                </td>
              </tr>
				<tr>
                <td>
                  <p>Email:</p>
                </td>
                <td>
                  <p><?php echo $user_data['email']; ?></p>
                </td>
              </tr>
				<tr>
                <td>
                  <p>Country:</p>
                </td>
                <td>
                  <p><?php echo $user_data['country']; ?></p>
                </td>
              </tr>
				<tr>
                <td>
                  <p>Gender:</p>
                </td>
                <td>
                  <p><?php echo $user_data['gender']; ?></p>
                </td>
              </tr>
            </tbody>
			  
          </table>

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

<?php include 'includes/overall/footer.php'; ?>
   