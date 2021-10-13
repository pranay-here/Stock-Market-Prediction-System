<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  $mid=$_REQUEST['id'];
  $sq="select * from menu where m_id='$mid'";
$q=mysqli_query($con,$sq);
$fet=mysqli_fetch_assoc($q);

  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  extract($_POST);
    
	$query="update menu set menu='$menu'  where m_id='$mid'";
	mysqli_query($con,$query);
	echo "<script> alert('your recoard is deleted!');
    window.location.href='viewmain.php';
	</script>";
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update Main Category</div>
      <div class="bs-example5">
             <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Edit Menu Name</label>
              <input type="text" value="<?php echo $fet['menu']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="menu">
			</div>
			
		<button type="submit" name="submit">Submit</button>
		</form>
		
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>