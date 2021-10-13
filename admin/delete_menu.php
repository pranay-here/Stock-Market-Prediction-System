<?php

include("../connect.php");
$s_id=$_REQUEST['mid'];
$query="delete from sub_menu where sub_mid='$s_id'";
mysqli_query($con,$query);
	echo "<script> alert('your recoard is deleted!');
    window.location.href='view_menu.php';
	</script>";

?>