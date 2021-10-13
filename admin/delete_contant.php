<?php

  include("../connect.php");
$cid=$_REQUEST['cid'];
//echo $cid;
$file=$_REQUEST['fil'];
//echo "<br>".$file;

$query="delete from menu_contant where con_id='$cid'";
mysqli_query($con,$query);
unlink("../upload/".$file);
mysqli_query($con,$query);
echo "<script> alert('your recoard is deleted!');
    window.location.href='view_menu_contant.php';
	</script>";

?>




