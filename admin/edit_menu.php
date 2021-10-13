<?php 
include 'header.php';
include 'rightmenu.php';
include '../connect.php';

$s_id=$_REQUEST['mid'];
if(isset($_POST['submit']))
{
	extract($_POST);
	$uq="update sub_menu set sub_mname='$s_menu' where sub_mid='$s_id'";
	mysqli_query($con,$uq);
	
	echo "<script> alert('your recoard is updated!');
    window.location.href='view_menu.php';
	</script>";
	
}



$sq="select * from sub_menu where sub_mid='$s_id'";
$res=mysqli_query($con,$sq);
if($row=mysqli_fetch_array($res))
{


?>

  
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Update Sub Menu</div>
      <div class="bs-example5" style="background-color: #d7e5ff">
        <form action="" method="post" enctype="multipart/form-data">
		
		
		<div class="form-group">Edit Sub Menu Name</label>
			  <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" value="<?php echo $row['sub_mname']; ?>" name="s_menu" required>
			</div>
		
		<?php
		  }
		?>
		
		    
			     <button type="submit" name="submit" class="btn btn-success">Upload</button>
		    </form>
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>
