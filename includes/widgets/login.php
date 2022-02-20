   
         <li class="dropdown dropdown-hover dropdown-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
              <i class="fa fa-user"></i>
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu">            
                    <form class="navbar-login-form" action="login" method="post">
                <p>Username:</p>
                <div class="youplay-input">
                  <input type="text" name="username">
                </div>

                <p>Password:</p>
                <div class="youplay-input">
                  <input type="password" name="password">
                </div>

                <button type="submit" value="Login" class="btn btn-sm">Log In</button> <br>
						
				<p>
                  Not a Member? &nbsp; | <a class="btn btn-sm active" href="register">Register</a>
                </p>

                <p>
                  <a class="no-fade fa fa-key" href="recover_password?mode=password">&nbsp;Lost password?</a> &nbsp; | &nbsp;&nbsp;<a class="no-fade fa fa-user" href="recover_username?mode=username"> Lost username?</a>
                </p>
              </form>
                
            </div>
          </li>
