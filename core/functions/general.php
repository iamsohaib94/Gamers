<?php
function email($to, $subject, $body){
	mail($to, $subject, $body, 'From: ');
}

function logged_in_redirect(){
	if(logged_in() === true){
		header('Location: index');
		exit();
	}
}

function protect_page(){
	if(logged_in() === false){
		header('Location: protected');
		exit();
	}
}

function admin_page(){
	global $user_data;
	if(has_access($user_data['user_id'], 1) === false){
		header('Location: index');
		exit();
	}
}

function array_sanitize(&$item){
	$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}

function sanitize($data) {
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}

function output_errors($errors){
	return '' . implode($errors) . '';
}


?>