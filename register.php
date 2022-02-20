<?php
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php'; 

if(empty($_POST) === false){
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
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
		if(user_exists($_POST['username']) === true){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Sorry, the username \'' . $_POST['username'] . '\' is already taken.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}
		if(preg_match("/\\s/", $_POST['username']) == true){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Your username must not contain any space.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}
		if(strlen($_POST['password']) < 6){
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
		if($_POST['password'] !== $_POST['password_again']){
			$errors[] = '<script>
    setTimeout(function() {
        swal({
            title: "Sorry",
            text: "Your Password do not match.",
            type: "error",
			confirmButtonText: "OK"
        }, function() {
        });
    }, 1000);
</script>';
		}
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
		}
		if(email_exists($_POST['email']) === true){
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
    <div class="youplay-banner banner-top youplay-banner-parallax xsmall">
      <div class="image">
        <img class="jarallax-img" src="images/pro/1.jpg" alt="">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h1>Register</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-content">

      <div class="col-md-9">

        <?php
          if(isset($_GET['success']) === true && empty($_GET['success']) === true){
	      echo '<script>
    setTimeout(function() {
        swal({
            title: "Welcome!",
            text: "You\'ve been registered successfully! Please check your email to activate your account.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
			window.location = "index";
        });
    }, 1000);
</script>';
         }else{

         if(empty($_POST) === false && empty($errors) === true){
	     $register_data = array(
	     'username'     => $_POST['username'],
         'password'     => $_POST['password'],
	     'first_name'   => $_POST['first_name'],
	     'last_name'    => $_POST['last_name'],
	     'email'        => $_POST['email'],
	     'gender'       => $_POST['gender'],
	     'country'      => $_POST['country'],
	     'email_code'   =>md5($_POST['username'] + microtime())
	     );
	     register_user($register_data);
	      $_SESSION['user_id'] = $register_data;
			echo '<script>
    setTimeout(function() {
        swal({
            title: "Welcome!",
            text: "You\'ve been registered successfully! Please check your email to activate your account.",
            type: "success",
			confirmButtonText: "OK"
        }, function() {
			window.location = "index";
        });
    }, 1000);
</script>';
        }else if(empty($errors) === false){
	    
		echo output_errors($errors);
		}
       ?>
        
     <!-- Regsitration -->
        <form action="" method="POST" data-toggle="validator">

        <div class="row">
          <div class="col-md-6">
            <p>User Name:</p>
            <div class="youplay-input">
              <input type="text" name="username" placeholder="UserName" required>
            </div>
          </div>
          <div class="col-md-6">
            <p>Email:</p>
            <div class="youplay-input">
              <input type="email" name="email" placeholder="Email" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p>Password:</p>
            <div class="youplay-input">
              <input type="password" name="password" id="myInput" placeholder="Password" required>
            </div>
          </div>
          <div class="col-md-6">
            <p>Confirm Password:</p>
            <div class="youplay-input">
              <input type="password" name="password_again" placeholder="Confirm Password" required>
            </div>
          </div>
        </div><br>
		  
		  <div class="youplay-checkbox">
          <input onclick="myFunction()" type="checkbox" name="create_account" id="checkbox1">
          <label for="checkbox1">Show Password</label>
          </div>
		  
		  <script>
          function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
         }
          </script>
		  
		  <div class="row">
          <div class="col-md-6">
            <p>First Name:</p>
            <div class="youplay-input">
              <input type="text" name="first_name" placeholder="First Name" required>
            </div>
          </div>
          <div class="col-md-6">
            <p>Last Name:</p>
            <div class="youplay-input">
              <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
          </div>
        </div>

        <p>Country:</p>
        <label class="youplay-select">
          <select name="country" required="required">
                     <option value="Select Country">Select Country</option>
                     <option value="Afganistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="American Samoa">American Samoa</option>
                     <option value="Andorra">Andorra</option>
                     <option value="Angola">Angola</option>
                     <option value="Anguilla">Anguilla</option>
                     <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Armenia">Armenia</option>
                     <option value="Aruba">Aruba</option>
                     <option value="Australia">Australia</option>
                     <option value="Austria">Austria</option>
                     <option value="Azerbaijan">Azerbaijan</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Bahrain">Bahrain</option>
					 <option value="Bangladesh">Bangladesh</option>
                     <option value="Barbados">Barbados</option>
                     <option value="Belarus">Belarus</option>
					 <option value="Belgium">Belgium</option>
				     <option value="Belize">Belize</option>
				     <option value="Benin">Benin</option>
			    	 <option value="Bermuda">Bermuda</option>
					 <option value="Bhutan">Bhutan</option>
					 <option value="Bolivia">Bolivia</option>
					 <option value="Bonaire">Bonaire</option>
					 <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
					 <option value="Botswana">Botswana</option>
					 <option value="Brazil">Brazil</option>
					 <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
					 <option value="Brunei">Brunei</option>
					 <option value="Bulgaria">Bulgaria</option>
					 <option value="Burkina Faso">Burkina Faso</option>
					 <option value="Burundi">Burundi</option>
					 <option value="Cambodia">Cambodia</option>
					 <option value="Cameroon">Cameroon</option>
					 <option value="Canada">Canada</option>
					 <option value="Canary Islands">Canary Islands</option>
					 <option value="Cape Verde">Cape Verde</option>
					 <option value="Cayman Islands">Cayman Islands</option>
					 <option value="Central African Republic">Central African Republic</option>
					 <option value="Chad">Chad</option>
				     <option value="Channel Islands">Channel Islands</option>
					 <option value="Chile">Chile</option>
					 <option value="China">China</option>
					 <option value="Christmas Island">Christmas Island</option>
					 <option value="Cocos Island">Cocos Island</option>
					 <option value="Colombia">Colombia</option>
					 <option value="Comoros">Comoros</option>
					 <option value="Congo">Congo</option>
					 <option value="Cook Islands">Cook Islands</option>
					 <option value="Costa Rica">Costa Rica</option>
					 <option value="Cote DIvoire">Cote DIvoire</option>
					 <option value="Croatia">Croatia</option>
					 <option value="Cuba">Cuba</option>
					 <option value="Curaco">Curacao</option>
					 <option value="Cyprus">Cyprus</option>
					 <option value="Czech Republic">Czech Republic</option>
					 <option value="Denmark">Denmark</option>
					 <option value="Djibouti">Djibouti</option>
					 <option value="Dominica">Dominica</option>
					 <option value="Dominican Republic">Dominican Republic</option>
					 <option value="East Timor">East Timor</option>
					 <option value="Ecuador">Ecuador</option>
					 <option value="Egypt">Egypt</option>
					 <option value="El Salvador">El Salvador</option>
					 <option value="Equatorial Guinea">Equatorial Guinea</option>
					 <option value="Eritrea">Eritrea</option>
					 <option value="Estonia">Estonia</option>
					 <option value="Ethiopia">Ethiopia</option>
					 <option value="Falkland Islands">Falkland Islands</option>
					 <option value="Faroe Islands">Faroe Islands</option>
					 <option value="Fiji">Fiji</option>
					 <option value="Finland">Finland</option>
					 <option value="France">France</option>
					 <option value="French Guiana">French Guiana</option>
					 <option value="French Polynesia">French Polynesia</option>
					 <option value="French Southern Ter">French Southern Ter</option>
					 <option value="Gabon">Gabon</option>
					 <option value="Gambia">Gambia</option>
					 <option value="Georgia">Georgia</option>
					 <option value="Germany">Germany</option>
					 <option value="Ghana">Ghana</option>
					 <option value="Gibraltar">Gibraltar</option>
					 <option value="Great Britain">Great Britain</option>
					 <option value="Greece">Greece</option>
					 <option value="Greenland">Greenland</option>
					 <option value="Grenada">Grenada</option>
					 <option value="Guadeloupe">Guadeloupe</option>
					 <option value="Guam">Guam</option>
					 <option value="Guatemala">Guatemala</option>
					 <option value="Guinea">Guinea</option>
					 <option value="Guyana">Guyana</option>
					 <option value="Haiti">Haiti</option>
					 <option value="Hawaii">Hawaii</option>
					 <option value="Honduras">Honduras</option>
					 <option value="Hong Kong">Hong Kong</option>
					 <option value="Hungary">Hungary</option>
					 <option value="Iceland">Iceland</option>
					 <option value="Indonesia">Indonesia</option>
					 <option value="India">India</option>
					 <option value="Iran">Iran</option>
					 <option value="Iraq">Iraq</option>
					 <option value="Ireland">Ireland</option>
					 <option value="Isle of Man">Isle of Man</option>
					 <option value="Israel">Israel</option>
					 <option value="Italy">Italy</option>
					 <option value="Jamaica">Jamaica</option>
					 <option value="Japan">Japan</option>
					 <option value="Jordan">Jordan</option>
					 <option value="Kazakhstan">Kazakhstan</option>
					 <option value="Kenya">Kenya</option>
					 <option value="Kiribati">Kiribati</option>
					 <option value="Korea North">Korea North</option>
					 <option value="Korea Sout">Korea South</option>
					 <option value="Kuwait">Kuwait</option>
					 <option value="Kyrgyzstan">Kyrgyzstan</option>
					 <option value="Laos">Laos</option>
					 <option value="Latvia">Latvia</option>
					 <option value="Lebanon">Lebanon</option>
					 <option value="Lesotho">Lesotho</option>
					 <option value="Liberia">Liberia</option>
					 <option value="Libya">Libya</option>
					 <option value="Liechtenstein">Liechtenstein</option>
					 <option value="Lithuania">Lithuania</option>
					 <option value="Luxembourg">Luxembourg</option>
					 <option value="Macau">Macau</option>
					 <option value="Macedonia">Macedonia</option>
					 <option value="Madagascar">Madagascar</option>
				     <option value="Malaysia">Malaysia</option>
				     <option value="Malawi">Malawi</option>
				     <option value="Maldives">Maldives</option>
				     <option value="Mali">Mali</option>
				     <option value="Malta">Malta</option>
				     <option value="Marshall Islands">Marshall Islands</option>
				     <option value="Martinique">Martinique</option>
				     <option value="Mauritania">Mauritania</option>
				     <option value="Mauritius">Mauritius</option>
				     <option value="Mayotte">Mayotte</option>
				     <option value="Mexico">Mexico</option>
				     <option value="Midway Islands">Midway Islands</option>
				     <option value="Moldova">Moldova</option>
				     <option value="Monaco">Monaco</option>
				     <option value="Mongolia">Mongolia</option>
				     <option value="Montserrat">Montserrat</option>
				     <option value="Morocco">Morocco</option>
				     <option value="Mozambique">Mozambique</option>
				     <option value="Myanmar">Myanmar</option>
				     <option value="Nambia">Nambia</option>
				     <option value="Nauru">Nauru</option>
				     <option value="Nepal">Nepal</option>
				     <option value="Netherland Antilles">Netherland Antilles</option>
				     <option value="Netherlands">Netherlands (Holland, Europe)</option>
				     <option value="Nevis">Nevis</option>
				     <option value="New Caledonia">New Caledonia</option>
				     <option value="New Zealand">New Zealand</option>
				     <option value="Nicaragua">Nicaragua</option>
				     <option value="Niger">Niger</option>
				     <option value="Nigeria">Nigeria</option>
				     <option value="Niue">Niue</option>
				     <option value="Norfolk Island">Norfolk Island</option>
				     <option value="Norway">Norway</option>
				     <option value="Oman">Oman</option>
				     <option value="Pakistan">Pakistan</option>
				     <option value="Palau Island">Palau Island</option>
				     <option value="Palestine">Palestine</option>
				     <option value="Panama">Panama</option>
				     <option value="Papua New Guinea">Papua New Guinea</option>
				     <option value="Paraguay">Paraguay</option>
				     <option value="Peru">Peru</option>
				     <option value="Phillipines">Philippines</option>
				     <option value="Pitcairn Island">Pitcairn Island</option>
				     <option value="Poland">Poland</option>
				     <option value="Portugal">Portugal</option>
				     <option value="Puerto Rico">Puerto Rico</option>
				     <option value="Qatar">Qatar</option>
				     <option value="Republic of Montenegro">Republic of Montenegro</option>
				     <option value="Republic of Serbia">Republic of Serbia</option>
				     <option value="Reunion">Reunion</option>
				     <option value="Romania">Romania</option>
				     <option value="Russia">Russia</option>
				     <option value="Rwanda">Rwanda</option>
				     <option value="St Barthelemy">St Barthelemy</option>
				     <option value="St Eustatius">St Eustatius</option>
				     <option value="St Helena">St Helena</option>
				     <option value="St Kitts-Nevis">St Kitts-Nevis</option>
				     <option value="St Lucia">St Lucia</option>
				     <option value="St Maarten">St Maarten</option>
				     <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
				     <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
				     <option value="Saipan">Saipan</option>
				     <option value="Samoa">Samoa</option>
				     <option value="Samoa American">Samoa American</option>
				     <option value="San Marino">San Marino</option>
				     <option value="Sao Tome & Principe">Sao Tome & Principe</option>
				     <option value="Saudi Arabia">Saudi Arabia</option>
				     <option value="Senegal">Senegal</option>
				     <option value="Seychelles">Seychelles</option>
				     <option value="Sierra Leone">Sierra Leone</option>
				     <option value="Singapore">Singapore</option>
				     <option value="Slovakia">Slovakia</option>
				     <option value="Slovenia">Slovenia</option>
				     <option value="Solomon Islands">Solomon Islands</option>
				     <option value="Somalia">Somalia</option>
				     <option value="South Africa">South Africa</option>
				     <option value="Spain">Spain</option>
				     <option value="Sri Lanka">Sri Lanka</option>
				     <option value="Sudan">Sudan</option>
				     <option value="Suriname">Suriname</option>
				     <option value="Swaziland">Swaziland</option>
				     <option value="Sweden">Sweden</option>
				     <option value="Switzerland">Switzerland</option>
				     <option value="Syria">Syria</option>
				     <option value="Tahiti">Tahiti</option>
				     <option value="Taiwan">Taiwan</option>
				     <option value="Tajikistan">Tajikistan</option>
				     <option value="Tanzania">Tanzania</option>
				     <option value="Thailand">Thailand</option>
				     <option value="Togo">Togo</option>
				     <option value="Tokelau">Tokelau</option>
				     <option value="Tonga">Tonga</option>
				     <option value="Trinidad & Tobago">Trinidad & Tobago</option>
				     <option value="Tunisia">Tunisia</option>
				     <option value="Turkey">Turkey</option>
				     <option value="Turkmenistan">Turkmenistan</option>
				     <option value="Turks & Caicos Is">Turks & Caicos Is</option>
				     <option value="Tuvalu">Tuvalu</option>
				     <option value="Uganda">Uganda</option>
				     <option value="United Kingdom">United Kingdom</option>
				     <option value="Ukraine">Ukraine</option>
				     <option value="United Arab Erimates">United Arab Emirates</option>
				     <option value="United States of America">United States of America</option>
				     <option value="Uraguay">Uruguay</option>
				     <option value="Uzbekistan">Uzbekistan</option>
				     <option value="Vanuatu">Vanuatu</option>
				     <option value="Vatican City State">Vatican City State</option>
				     <option value="Venezuela">Venezuela</option>
				     <option value="Vietnam">Vietnam</option>
				     <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
				     <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
				     <option value="Wake Island">Wake Island</option>
				     <option value="Wallis & Futana Is">Wallis & Futana Is</option>
				     <option value="Yemen">Yemen</option>
				     <option value="Zaire">Zaire</option>
				     <option value="Zambia">Zambia</option>
				     <option value="Zimbabwe">Zimbabwe</option>				 
                </select>
        </label><br>


        <!-- Payment Type -->
        <p>Gender:</p><br>
        <div class="youplay-radio">
          <input type="radio" name="gender" value="Male" id="radio1" required>
          <label for="radio1">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type="radio" name="gender" value="Female" id="radio2" required>
          <label for="radio2">Female</label>
        </div><br><br>
        <!-- /Payment Type -->


        <!-- Order Button -->
        <button type="submit" value="Regsiter" class="btn btn-default" >Register</button>
        <!-- /Order Button -->
		  </form>
      </div>

      <!-- Right Side -->
      <div class="col-md-3">
		  
		  <!-- Post Share -->
		  <h2>Social Login</h2>
          <div class="btn-group social-list social-likes" data-counters="no">
            <span class="btn btn-primary facebook" title="Share link on Facebook"></span>
            <span class="btn btn-default plusone" title="Share link on Google+"></span>
          </div><br><br>
          <!-- /Post Share -->

      </div>
      <!-- /Right Side -->

    </div>

  </section>
  <!-- /Main Content -->



    <?php 
      }
     include 'includes/overall/footer.php';
    ?>