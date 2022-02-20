
           <li class="dropdown dropdown-hover">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <?php echo $user_data['username']; ?> <span class="caret"></span> <span class="label"><?php echo $level_name; ?></span>
                    </a>
			   
            <div class="dropdown-menu">
              <ul role="menu">
				<li><a href="profile">Profile</a>
                </li>
				<li><a href="logout">Log out</a>
                </li>
				 <li>
					<?php
                     if($user_level == 1){
	                   echo "<a href='adminitration'> Administration </a>";
                      }
                     ?>
                </li>

              </ul>
            </div>
          </li>

