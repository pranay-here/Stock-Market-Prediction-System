<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  extract($_POST);
  //$file_name=$_FILES['file']['name'];
  //$tmp_name=$_FILES['file']['tmp_name'];
  //$location='../upload/';
  $query="insert into sub_menu(sub_mname,m_id) values('$sub_menu','$m_menu')";
  if(mysqli_query($con,$query)){
  
  //move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("Content has been added successfully");
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
    <div class="widget_head">Add Sub_Menu </div>
      <div class="bs-example5" style="background-color: #d7e5ff">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Select Main Menu Category</label>
              <select class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="m_menu" required>
			  <option value="">--select--</option>
			  <?php include("../connect.php");
			  $sq="select * from menu";
			  $q=mysqli_query($con,$sq);
			  while($row=mysqli_fetch_assoc($q)){
				  ?>
			  <option value="<?php echo $row['m_id']; ?>"><?php echo $row['menu']; ?></option>
			  <?php } ?>
			  </select>
			</div>
			
			<div class="form-group">Enter Name of Sub Menu </label>
			  <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="sub_menu" required>
			</div>
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<button type="submit" name="submit" style="margin-top:4%;"><a href="view_menu.php">Manage</a></button>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>