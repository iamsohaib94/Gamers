<?php
include 'core/init.php';
include 'includes/overall/header.php'; 
?>

<!-- Main Content -->
  <section class="content-wrap">
  
<div class="container youplay-content">     

      <!-- staff -->
      <h2 id="six" class="h1">Gamers Origin - Staff</h2>
      <table id="one" class="table table">
        
          <tr id="two" class="table table-striped">     
            <td id="five">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Names</td>
            <td id="five">Status</td>
            <td id="five">Level</td>
          </tr>
        
        <?php
           $list_query = mysql_query("Select * FROM users LIMIT 3");
           while($run_list = mysql_fetch_array($list_query)){
	       $user_id = $run_list['user_id'];
       	   $u_username = $run_list['username'];
	       $status = $run_list['status'];
	       $u_user_level = $run_list['user_level'];
	    ?>
        
          <tr>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $u_username ?> </td>

           <td>
            <?php
             if($status == '1'){
	        	echo '<span class="dott"></span>&nbsp;&nbsp;online';
	         }else{
		       echo '<span class="dot"></span>&nbsp;&nbsp;offline';
	         }
	         ?>
           </td>

	   	   <td>
            <?php
             if($u_user_level == '1'){
	        	echo "Owner";
	         }else{
		       echo "Developer";
	         }
	         ?>
           </td>
			  
          </tr>
			<?php  
		   }
		  ?>
      </table>
      <!-- /staff -->	
      
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