<?php
//-> how to close a session in php?
//session_start();

#unset($_SESSION['id']);
unset($_SESSION['userid']);
unset($_SESSION['emp_id']);
session_destroy();
//session_unset();

echo "<h1>welcom to logout page</h1>";

// Session close 

//redirect into login page 
 header('location:index.php');

?>