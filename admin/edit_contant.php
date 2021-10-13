<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
   $cid=$_REQUEST['cid'];
   $select="select * from menu_contant where con_id='$cid'";
   $res=mysqli_query($con,$select);
   
  
   // here update query
   if(isset($_POST['submit']))
   {
	extract($_POST);
	$file_name=rand(1,100).$_FILES['file']['name'];
	$a=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$location="../upload/";
	if($a=="")
	{
		$query="update menu_contant set contant='".addslashes($contant)."' where con_id='$cid'";
		mysqli_query($con,$query);
		echo "<script> alert('your recoard has been updated!');
    window.location.href='view_menu_contant.php';
	</script>";
	}
	else
	{
		$query="update menu_contant set contant='".addslashes($contant)."',file='$file_name' where con_id='$cid'";
		mysqli_query($con,$query);
		move_uploaded_file($tmp_name,$location.$file_name);
		
		echo "<script> alert('your recoard has been updated!');
    window.location.href='view_menu_contant.php';
	</script>";
	}
	
	
   }
  
 
?>   

<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Edit Contant in  Sub_Menu </div>
      <div class="bs-example5" style="background-color: #d7e5ff">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
			
	 <!-- edit  contant -->
	 
			<?php
			if($row=mysqli_fetch_array($res))
			{
			?>
			
			
			<div class="form-group"><div>Edit Contant</div>
			   <textarea name="contant" style="resize:none;height:100px;width:600px;">
			     <?php echo $row['contant']; ?>
			   </textarea>
			</div>
			
			<div class="form-group"><div>Current Images</div>
			   <img src="../upload/<?php echo $row['file']; ?>" style="height:200px;width:180px;">
			</div>
			
			<div class="form-group"><div>Upload Contant File</div>
			   <input type="file" name="file" />
			</div>
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<?php
			}
		?>
		
     
        <?php include 'footer.php';?>
      
  </div>
</div>