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
  
  
  $query="insert into service(image,heading,content) values('$file_name','$heading','$content')";
  
  if(mysqli_query($con,$query)){
   move_uploaded_file($tmp_name,$location.$file_name);
 
  echo'<script>
  alert("content has been added successfully");
  </script>';
  }
  }
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add Services</div>
      <div class="bs-example5">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
		
			<div class="form-group">Choose Image</label>
			<input type="file" name="file"/>
			</div>
			<div class="form-group">Enter Main Content</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="heading">
			</div>
			<div class="form-group">Enter Location Content</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="content">
			</div>
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<h2><a href="viewservice.php">Click Here To Manage</a></h2>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>