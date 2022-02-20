<?php
include 'core/init.php';
include 'includes/overall/header.php'; 
?>

<!-- Main Content -->
  <section class="content-wrap">

    <div class="container youplay-content">      

		
		<!-- Member -->
      <h2 id="six" class="h1">Gamers Origin - Members</h2>
      <table id="one" class="table table">
        
          <tr id="two" class="table table-striped">     
            <th id="five">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Names</th>
            <th id="five">Level</th>
            <th id="five">Joining Date</th>
          </tr>
        
		   <?php
           $list_query = mysql_query("Select * FROM users LIMIT 13,5");
           while($run_list = mysql_fetch_array($list_query)){
	       $user_id = $run_list['user_id'];
       	   $u_username = $run_list['username'];
	       $reg_date = $run_list['reg_date'];
	       $reg_date = date('d-M-Y', strtotime($reg_date));
		   $u_user_level = $run_list['user_level'];
	     ?>
		  
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u_username ?></td>
            <td><?php
             if($u_user_level == '1'){
	        	echo "Owner";
	         }else{
		       echo "Member";
	         }
	         ?></td>
            <td><?php echo $reg_date ?></td>
          </tr>
 			<?php 
		   }
		  ?>
      </table>
      <!-- /Member -->	

    </div>
	  
	  <div id="one">
	    <a href="member" class="btn btn-xs">1</a>
	    <a href="page_1" class="btn btn-xs">2</a>
		<a href="page_2" class="btn btn-xs">3</a>
	  </div>
	  
	  <!-- Member -->
	  <div class="container youplay-content">
      <p id="three">
        <?php 
					$user_count = user_count();
					$suffix = ($user_count != 1) ? 's' : '';
					?>
        We have <?php echo user_count(); ?> registered Member<?php echo $suffix; ?>
      </p>
    </div>
     <!-- /Member -->
	

<?php include 'includes/overall/footer.php'; ?>