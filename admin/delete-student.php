<?php
include('dbconection.php');
$sid=$_GET['stdid'];
$q=mysqli_query($conn,"UPDATE student SET is_active=0 WHERE std_id='".$sid."' and is_active=1");
if($q>0){
	header('location:view-student.php');
}
?>