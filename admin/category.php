<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  extract($_POST);
  $query="insert into category (name) values('$text1')";
 if(mysqli_query($con,$query)){
  
  echo'<script>
  alert("Content has been added successfully");
  </script>';
 }
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add Image Category</div>
      <div class="bs-example5" style="background-color: #d7e5ff">
             <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Enter Name</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="text1">
			</div>
			
			
		<button type="submit" name="submit">Submit</button>
		</form>
		<br>
		<h2><a href="viewcategory.php">Click Here To Manage</a></h2>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>