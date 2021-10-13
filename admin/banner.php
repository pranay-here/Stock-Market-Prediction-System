<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  extract($_POST);
  $file_name=rand(1,100).$_FILES['file']['name'];
  $tmp_name=$_FILES['file']['tmp_name'];
  $location='../upload/';
  $query="insert into banner(banner) values('$file_name')";
  if( mysqli_query($con,$query)){
  
  move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("Content has been added successfully.");
  </script>';
  }
  else{
	  echo'<script>
  alert("Content failed to upload.");
  </script>';
 }
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update Photo  </div>
      <div class="bs-example5" style="background-color: #d7e5ff">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
			
			
			<div class="form-group">Upload New Photo </label>
			  <input type="file" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="file" required>
			</div>
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<button type="button" name="submit" style="margin-top:4%;"><a href="view_banner.php">Manage</a></button>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>