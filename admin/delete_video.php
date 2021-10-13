<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from video where v_id='$id'";
mysqli_query($con,$query);
header("Location:viewvideo.php");


?>