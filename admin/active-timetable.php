<?php
 include("dbconection.php");
 $bid=$_GET['tid'];
 $q=mysqli_query($conn,"UPDATE bridge SET is_active=1 WHERE b_id='".$bid."' and is_active=0");
 if($q>0){
 	header('location:view-timetable.php');
 }
?>