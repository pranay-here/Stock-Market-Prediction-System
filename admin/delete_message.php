<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from contact where id='$id'";
mysqli_query($con,$query);
header("Location:msg.php");


?>