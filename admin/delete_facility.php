<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from facility where f_id='$id'";
mysqli_query($con,$query);
header("Location:viewfacility.php");


?>