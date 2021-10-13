<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  $id=$_REQUEST['id'];
  $sq="select * from category where c_id='$id'";
$q=mysqli_query($con,$sq);
$fet=mysqli_fetch_assoc($q);

  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
  $heading=$_POST['text1'];
    
	$query="update category set name='$heading'  where c_id='$id'";
	if(mysqli_query($con,$query)){
	 	echo '<script language="javascript">';
		echo 'alert("Your Content successfully Updated");';
		echo 'window.location.href="viewcategory.php";';
		echo '</script>';
	 	

	 }else{
	 	echo '<script language="javascript">';
		echo 'alert("Your Content Is Not Updated.");';
		echo 'window.location.href="viewcategory.php";';
		echo '</script>';
	 }
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update Category Name</div>
      <div class="bs-example5">
             <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Enter Name</label>
              <input type="text" value="<?php echo $fet['name'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="text1">
			</div>
			
		<button type="submit" name="submit">Submit</button>
		</form>
		
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>