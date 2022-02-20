<?php  

require 'core/database/connect.php';

$user_id = $_GET['user_id'];
$active = $_GET['active'];

if($active == '1'){
	
	mysql_query("UPDATE `users` SET `active`='0' where `user_id`='$user_id'");
	header('Location: adminitration?active=user');
	
}else if($active == '0'){
	mysql_query("UPDATE `users` SET `active`='1' where `user_id`='$user_id'");
	header('Location: adminitration?active=user');
}


?>