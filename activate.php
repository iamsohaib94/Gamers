<?php

include 'core/init.php';
   logged_in_redirect();
     
         include('includes/overall/header.php');

         $mail = $_GET['email'];
         $code = $_GET['email_code'];
 
         if(isset($mail) && isset($code))
         {
           $query = "UPDATE users SET active = 1 WHERE email='" . $mail . "' AND email_code = '" . $code ."';";
           $count = mysql_query($query);
 
           //new work
           header('Location: activesuccess');
           exit();
 
          }

          include('includes/overall/footer.php');

?>