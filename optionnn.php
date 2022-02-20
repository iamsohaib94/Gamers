<?php  

require 'core/database/connect.php';

$user_id = $_GET['user_id'];

	
	mysql_query("DELETE FROM `users` where `user_id`='$user_id'");
	header('Location: adminitration?typee=delete');	


?>