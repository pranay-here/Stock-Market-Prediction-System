<?php 
include 'header.php';
include 'rightmenu.php';
include '../connect.php';
$id=$_REQUEST['id'];
if(isset($_POST['submit']))
{
extract($_POST);
$file_name=rand(1,100).$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location='../upload/';
$sel="select * from gallery where id='$id'";
$q=mysqli_query($con,$sel);
$row1=mysqli_fetch_array($q,MYSQL_BOTH);
$location1="../upload/$row1[image]";
if($tmp_name)
{
	$query1="update gallery set image='$file_name' where id='$id'";
	if(mysqli_query($con,$query1))
	{
	unlink($location1);
	move_uploaded_file($tmp_name,$location.$file_name);
	echo'<script>
	alert("Content has been updated successfully");
	window.location.href="view_gallery.php";
	</script>';
	}
}
else
{
echo '<script>
	window.location.href="view_gallery.php";
	</script>';
}
}
?>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update</div>
      <div class="bs-example5">
      	<h3>Select image And Click Upload button</h3></br>
        <form action="" method="post" enctype="multipart/form-data">
		<?php
		$query="select * from gallery where id='$id'";
		$res=mysqli_query($con,$query);
		if($row=mysqli_fetch_assoc($res))
		{
			?>
			
		    
				 <div class="form-group">
              <label class="control-label" style="font-size:20px;">Current  Image</label></br>
              <img src="../upload/<?php echo $row['image'];?>" width="150" height="100"/>
			</div>
				   <input type="file" name="file" /></br>
				
			     <button type="submit" name="submit" class="btn btn-success">Update</button>
				 <?php
		}
		?>
		    </form>
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>
