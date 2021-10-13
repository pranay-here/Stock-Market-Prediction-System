<?php
include("../connect.php");
$id=$_REQUEST['id'];

	
$query="delete from menu where m_id='$id'";
mysqli_query($con,$query);
	echo "<script> alert('your recoard is deleted!');
    window.location.href='viewmain.php';
	</script>";



?>