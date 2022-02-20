
<!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index">
          <img src="images/logo/1.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      About<span class="caret"></span> <span class="label">us</span>
                    </a>
			  <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="about">About Us</a>
                </li>
                <li><a href="staff">Staff</a>
                </li>
				 <li><a href="member">Members</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Category<span class="caret"></span><span class="label">games</span>
                    </a>
			  <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="pc">PC Games</a>
                </li>
				  <li><a href="##">PlayStation Games (Coming Soon)</a>
                </li>
              </ul>
            </div>
          </li>
			<li class="dropdown dropdown-hover">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Contact<span class="caret"></span><span class="label">us</span>
                    </a>
				<div class="dropdown-menu">
              <ul role="menu">
                <li><a href="contact">Contact Us</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Games<span class="caret"></span><span class="label">entertainment</span>
                    </a>
			  <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="xboxgame">Xbox Games</a>
                </li>
              </ul>
            </div>
          </li>
			
			<li class="dropdown dropdown-hover">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Updates<span class="caret"></span><span class="label">gamersorigin</span>
                    </a>
				<div class="dropdown-menu">
              <ul role="menu">
                <li class="dropdown dropdown-submenu pull-left">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Desktop Application </a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="##">Coming Soon</a>
                      </li>
                    </ul>
                  </div>
                </li>
				  <li><a href="changelog_1">Change Log # 1</a>
                </li>
              </ul>
            </div>
          </li>
			
			<li class="dropdown dropdown-hover">
            <a href="##" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Pricing<span class="caret"></span><span class="label">development</span>
                    </a>
				<div class="dropdown-menu">
              <ul role="menu">
				  <li><a href="pricing">Website Development</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
	  
        <ul class="nav navbar-nav navbar-right">
			
			  <?php 
	             if(logged_in() === true){
			       include 'includes/widgets/loggedin.php';
		         }else{
			     include 'includes/widgets/login.php';
		         }
	           ?>
                    
			<li>
            <a class="search-toggle" href="search.html">
              <i class="fa fa-search"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

