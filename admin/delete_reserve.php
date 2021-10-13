<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from banquate_reservation where b_id='$id'";
mysqli_query($con,$query);
header("Location:reserve.php");


?>