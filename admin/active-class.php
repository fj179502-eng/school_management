<?php
include('dbconection.php');
$cid=$_GET['clid'];
$q=mysqli_query($conn,"UPDATE class SET is_active=1 WHERE class_id='".$cid."' and is_active=0");
if($q>0){
	header('location:view-class.php');
}
?>