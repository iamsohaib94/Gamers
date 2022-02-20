<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>
    <div id="container">
		
         <?php 
	           if(logged_in() === true){
			       include 'includes/me.php';
		        }else{
			       include 'includes/menu.php';
		        }
	          ?>
