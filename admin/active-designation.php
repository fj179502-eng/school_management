<?php
include('dbconection.php');
$did=$_GET['desid'];
$q=mysqli_query($conn,"UPDATE designation SET is_active=1 WHERE designation_id='".$did."' and is_active=0");
if($q>0){
	header('location:view-designation.php');
}
?>