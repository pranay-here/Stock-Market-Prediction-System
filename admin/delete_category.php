<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from category where c_id='$id'";
mysqli_query($con,$query);
header("Location:viewcategory.php");


?>