<?php
include("../connect.php");
$id=$_REQUEST['id'];


$query="delete from service where s_id='$id'";
mysqli_query($con,$query);
header("Location:viewservice.php");


?>