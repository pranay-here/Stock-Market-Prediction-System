<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
  $bid=$_REQUEST['bid'];
  $bs="select * from banner where bn_id='$bid'";
  $bres=mysqli_query($con,$bs);
  
  if(isset($_POST['submit']))
  {
  extract($_POST);
  $file_name=rand(1,100).$_FILES['file']['name'];
  $tmp_name=$_FILES['file']['tmp_name'];
  $location='../upload/';
  $query="update banner set banner='$file_name' where bn_id='$bid'";
  if(mysqli_query($con,$query)){
  
  move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("content has been added successfully");
  window.location.href="view_banner.php";
  </script>';
  }
  else{
	  echo'<script>
  alert("content failed to upload");
  </script>';
 }
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add New Banner</div>
      <div class="bs-example5" style="background-color: #d7e5ff">
      	
        <form action="" method="post" enctype="multipart/form-data">
			  <label>Current Banner</label>
			  <?php
			  if($brow=mysqli_fetch_array($bres,MYSQL_BOTH))
			  {
			  ?>
			  <img src="../upload/<?php echo $brow['banner']; ?>" height="150" width="150">
			<?php
			  }
			?>
			<div class="form-group">Upload New Banner </label>
			  <input type="file" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="file" required>
			</div>
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<button type="submit" name="submit" style="margin-top:4%;"><a href="view_banner.php">Manage</a></button>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>