<?php
include('dbconection.php');
$eid=$_GET['empid'];
$q=mysqli_query($conn,"UPDATE employee SET is_active=1 WHERE emp_id='".$eid."' and is_active=0");
if($q>0){
	header('location:view-employee.php');
}
?>