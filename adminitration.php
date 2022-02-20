<?php
include 'core/init.php';
include 'includes/overall/header.php'; 
?>

<!-- Main Content -->
  <section class="content-wrap">

    <div class="container youplay-content">      

      <h2 id="one" class="h1">Admin Panel</h2>
		
	  <!-- Level -->
		
	  <div class="item col-lg-4 col-md-6 col-xs-12">
	    <h4 id="one">Level Settings</h4><br>
      <table id="one" class="table table-bordered">
        
          <tr id="two" class="table table-striped">     
            <th id="one">Level</th>           
            <th id="one">Options</th>
          </tr>
         
		  <?php
            $list_query = mysql_query("Select user_id, username, user_level from users");
            while($run_list = mysql_fetch_array($list_query)){
	        $user_id = $run_list['user_id'];
	        $u_username = $run_list['username'];
	        $u_user_level = $run_list['user_level'];
	       ?>
		  
          <tr>
            <td> <?php echo $u_username ?> </td>
            
            <td><?php
             if($u_user_level == '1'){
		          echo "Owner";
	         }else if($u_user_level == '0'){
		          echo "<a class='btn btn-xs active' href='option?user_id=$user_id&user_level=$u_user_level'>Members</a>";
	         }else if($u_user_level == '2'){
		          echo "<a class='btn btn-xs active' href='option?user_id=$user_id&user_level=$u_user_level'>Developer</a>";
	         }
	        ?></td>
          </tr>
	
          <?php
          }
         ?>
      </table>
	 </div>
		
        <!-- /Level -->
		
		<!-- Active -->
		
		<div class="item col-lg-4 col-md-6 col-xs-12"> 
		  <h4 id="one">Active Settings</h4><br>
      <table id="one" class="table table-bordered">
        
          <tr id="two" class="table table-striped">     
            <th id="one">Users</th>
            <th id="one">Options</th>
          </tr>
        
		  <?php
		  $list_query = mysql_query("Select user_id, username, active from users");
          while($run_list = mysql_fetch_array($list_query)){
	      $user_id = $run_list['user_id'];
	      $u_username = $run_list['username'];
	      $u_active = $run_list['active'];
          ?>
          <tr>
            <td> <?php echo $u_username ?> </td>
            
            <td> <?php
                 if($u_active == '1'){
		            echo "<a class='btn btn-xs active' href='optionn?user_id=$user_id&active=$u_active'>Deactive</a>";
	             }else{
		            echo "<a class='btn btn-xs active' href='optionn?user_id=$user_id&active=$u_active'>Active</a>";
	             }
	          ?>
			 </td>
          </tr>			
        
		  <?php
          }
         ?>
      </table>
	 </div>
		
		<!-- /Active -->
		
		<!-- Delete -->
		
		<div class="item col-lg-4 col-md-6 col-xs-12">	
		  <h4 id="one">Delete Settings</h4><br>
      <table id="one" class="table table-bordered">
        
          <tr id="two" class="table table-striped">     
            <th id="one">Users</th>
            <th id="one">Options</th>
          </tr>
        
		  <?php
          $list_query = mysql_query("Select user_id, username from users");
          while($run_list = mysql_fetch_array($list_query)){
	      $user_id = $run_list['user_id'];
	      $u_username = $run_list['username'];
	      ?> 
		  
          <tr>
            <td> <?php echo $u_username ?> </td>
            
            <td>
			<?php
		       echo "<a class='btn btn-xs active' href='optionnn?user_id=$user_id&typee=$u_username'>Delete</a>";	
	        ?>
			</td>
          </tr>
          <?php
          }
         ?>
      </table>
	 </div>
		
		<!-- /Delete -->

    </div>


<?php include 'includes/overall/footer.php'; ?>