<?php
 include('dbconection.php');
 $diid=$_GET['did'];
 $q=mysqli_query($conn,"UPDATE district SET is_active=0 WHERE district_id='".$diid."' and is_active=1");
 if($q>0){
 	header('location:view-district.php');
 }
?>