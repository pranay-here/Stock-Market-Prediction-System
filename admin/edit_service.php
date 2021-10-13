<?php 
include 'header.php';
include 'rightmenu.php';
include '../connect.php';

$id=$_REQUEST['id'];
$sq="select * from service where s_id='$id'";
$q=mysqli_query($con,$sq);
$fet=mysqli_fetch_assoc($q);



if(isset($_POST['upload'])){
	extract($_POST);
	$file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	 $file_size = $_FILES['file']['size'];
	 $file_type = $_FILES['file']['type'];
	 $folder="../upload/";
	 if($file_loc){
	 move_uploaded_file($file_loc,$folder.$file);
       
	   
	   $sq1="update service set image='$file', heading='$heading', content='$content' where s_id='$id'";

	  if(mysqli_query($con,$sq1)){
	 	echo '<script language="javascript">';
		echo 'alert("Your content successfully Updated");';
		echo 'window.location.href="viewservice.php";';
		echo '</script>';
	 	

	 }else{
	 	echo '<script language="javascript">';
		echo 'alert("Your content Not Updated");';
		echo 'window.location.href="viewservice.php";';
		echo '</script>';
	 }  
}else{
	$sql="update service set heading='$heading',content='$content' where s_id='$id'";
	mysqli_query($con,$sql);
	echo '<script language="javascript">';
		echo 'alert("Your content successfully Updated");';
		echo 'window.location.href="viewservice.php";';
		echo '</script>';
}
	   }
?>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update Services</div>
      <div class="bs-example5">
      	<h3>Select image And Click Upload button</h3></br>
        <form action="" method="post" enctype="multipart/form-data">
		     <div class="form-group">
              <label class="control-label" style="font-size:20px;">Current  Image</label></br>
              <img src="../upload/<?php echo $fet['image'];?>" width="150" height="100"/>
			</div>
				   <input type="file" name="file" /></br>
				<div class="form-group">Update Main Content</label>
              <input type="text" value="<?php echo $fet['heading'];?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="heading">
			</div>
			<div class="form-group">Update Location Content</label>
              <input type="text" value="<?php echo $fet['content'];?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="content">
			</div>
			     <button type="submit" name="upload" class="btn btn-success">Update</button>
		    </form>
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>
