<?php
session_start();
//error_reporting(0);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

if(logged_in() === true){
	$session_user_id = $_SESSION['user_id'];
   $user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'password_recover', 'user_level', 'allow_email', 'profile', 'gender', 'country', 'reg_date');
	
	// Level Setting
	$user_query = mysql_query("Select username, user_level from users where user_id='$session_user_id'");
	$run_user = mysql_fetch_array($user_query);
	$username = $run_user['username'];
	$user_level = $run_user['user_level'];
	
	$query_level = mysql_query("Select name from user_level where user_id='$user_level'");
	$run_level = mysql_fetch_array($query_level);
	$level_name = $run_level['name'];
	
	// Status Setting
	$user_query = mysql_query("Update `users` set status='1' where user_id='$session_user_id'");	
	
	// Active Setting
	if(user_active($user_data['username']) === false){
		session_destroy();
	}
	
	// Change Password Setting
	if($current_file !== 'changepassword' &&  $user_data['password_recover'] == 1){
		header('Location: changepassword?force');
		exit();
	}
}

$errors = array();
?>
