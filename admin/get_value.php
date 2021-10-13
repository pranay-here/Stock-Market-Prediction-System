<?php
  include("../connect.php");
if(isset($_POST['men_id']))
{
	extract($_POST);
	
	$query="select * from sub_menu where m_id='$men_id'";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res))
	{
?>
   <option value="<?php  echo $row['sub_mid']; ?>"><?php echo $row['sub_mname']; ?><option>
<?php
	}
}
?>