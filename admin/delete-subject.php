<?php
 include('dbconection.php');
 $sbid=$_GET['subid'];
 $q=mysqli_query($conn,"UPDATE subject SET is_active=0 WHERE sub_id='".$sbid."' and is_active=1");
 if($q>0){
 	header('location:view-subject.php');
 }
?>