<?php
 include('dbconection.php');
 $uid=$_GET['userid'];
 $q=mysqli_query($conn,"UPDATE user_login SET is_active=0 WHERE user_id='".$uid."' and is_active=1");
 if($q>0){
 	header('location:view-user.php');
 }
?>