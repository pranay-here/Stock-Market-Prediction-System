<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from reservation where r_id='$id'";
mysqli_query($con,$query);
header("Location:reservation.php");


?>