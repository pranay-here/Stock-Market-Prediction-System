<?php

  include("../connect.php");
$bid=$_REQUEST['bid'];
//echo $bid;
$file=$_REQUEST['fi'];
//echo $file;
$query="delete from banner where bn_id='$bid'";
mysqli_query($con,$query);
unlink("../upload/".$file);
mysqli_query($con,$query);
	echo "<script> alert('your recoard is deleted!');
    window.location.href='view_banner.php';
	</script>";

?>