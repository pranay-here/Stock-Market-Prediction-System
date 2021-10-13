<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  extract($_POST);
  $query="insert into facility (content) values('$text1')";
 if(mysqli_query($con,$query)){
  
  echo'<script>
  alert("content has been added successfully");
  </script>';
 }
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add Facility</div>
      <div class="bs-example5">
             <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Enter Content</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="text1">
			</div>
			
			
		<button type="submit" name="submit">Submit</button>
		</form>
		<br>
		<h2><a href="viewfacility.php">Click Here To Manage</a></h2>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>