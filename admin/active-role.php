<?php
 include('dbconection.php');
 $roid=$_GET['rid'];
 $q=mysqli_query($conn,"UPDATE user_role SET is_active=1 WHERE role_id='".$roid."' and is_active=0");
 if($q>0){
 	header('location:view-role.php');
 }
?>