<?php
 include('dbconection.php');
 $scid=$_GET['sid'];
 $q=mysqli_query($conn,"UPDATE school SET is_active=1 WHERE school_id='".$scid."' and is_active=0");
 if($q>0){
 	header('location:view-school.php');
 }
?>