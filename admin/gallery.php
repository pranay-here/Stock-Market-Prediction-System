<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  extract($_POST);
  $file_name=$_FILES['file']['name'];
  $tmp_name=$_FILES['file']['tmp_name'];
  $location='../upload/';
  $query="insert into gallery(image,category) values('$file_name','$text1')";
  mysqli_query($con,$query);
  
  move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("content has been added successfully");
  </script>';
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add Gallery Images</div>
      <div class="bs-example5">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Category</label>
              <select class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="text1" required>
			  <option value="">--select--</option>
			  <?php include("../connect.php");
			  $sq="select * from category";
			  $q=mysqli_query($con,$sq);
			  while($row=mysqli_fetch_assoc($q)){
				  ?>
			  <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
			  <?php } ?>
			  </select>
			</div>
			
			<input type="file" name="file"/>
			
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<h2><a href="view_gallery.php">Click Here To Manage</a></h2>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>