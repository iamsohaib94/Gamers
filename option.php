<?php  

require 'core/database/connect.php';

$user_id = $_GET['user_id'];
$user_level = $_GET['user_level'];

if($user_level == '0'){
	
	mysql_query("UPDATE `users` SET `user_level`='2' where `user_id`='$user_id'");
	header('Location: adminitration?user_level=level');
	
}else if($user_level == '2'){
	mysql_query("UPDATE `users` SET `user_level`='0' where `user_id`='$user_id'");
	header('Location: adminitration?user_level=level');
	
}


?>