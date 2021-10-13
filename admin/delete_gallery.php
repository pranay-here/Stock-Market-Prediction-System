<?php
include("../connect.php");
$id=$_REQUEST['id'];

	$sel="select * from gallery where id='$id'";
$q=mysqli_query($con,$sel);
$row1=mysqli_fetch_array($q,MYSQL_BOTH);
$location1="../upload/$row1[image]";
$query="delete from gallery where id='$id'";
if(mysqli_query($con,$query))
{
	unlink($location1);
header("Location:view_gallery.php");

}
?>