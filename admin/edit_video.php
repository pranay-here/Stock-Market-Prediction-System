<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  $id=$_REQUEST['id'];
  $sq="select * from video where v_id='$id'";
$q=mysqli_query($con,$sq);
$fet=mysqli_fetch_assoc($q);

  ?>
  
  <?php
  if(isset($_POST['submit']))
  {
extract($_POST);
     $s=$link;
	$query="update video set link='$s'  where v_id='$id'";
	if(mysqli_query($con,$query)){
	 	echo '<script language="javascript">';
		echo 'alert("Your Content successfully Updated");';
		echo 'window.location.href="viewvideo.php";';
		echo '</script>';
	 	

	 }else{
	 	echo '<script language="javascript">';
		echo 'alert("Your Content Is Not Updated.");';
		echo 'window.location.href="viewvideo.php";';
		echo '</script>';
	 }
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update Video</div>
      <div class="bs-example5"  style="background-color: #d7e5ff">
             <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Update Link Name</label>
              <input type="text" value="<?php echo $fet['link'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="link">
			</div>
		
			
		<button type="submit" name="submit">Update</button>
		</form>
		
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>