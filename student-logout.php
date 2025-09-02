<?php
//-> how to close a session in php?
//session_start();

#unset($_SESSION['id']);
unset($_SESSION['stdid']);
unset($_SESSION['std_id']);
session_destroy();
//session_unset();

echo "<h1>welcom to logout page</h1>";

// Session close 

//redirect into login page 
 header('location:student-index.php');

?>