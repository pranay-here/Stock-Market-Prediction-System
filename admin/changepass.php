<?php
//session_start();
include("../connect.php");
include("header.php");
include("rightmenu.php");
$user=$_SESSION['user'];
if(isset($_POST['submit']))
{
	$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
//echo $op,$np,$cnp;
//die();
//echo $op,$np,$cnp;
//$email=$_SESSION['user'];
//echo $email;
//die();
$query="select pwd from login where username='$user'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res);
if($row['pwd']==$op)
{
	if($np==$op)
	{
		echo'<script>
		alert("Old & New Password Cannot Be Same");
		</script>';
	}
	else if($cnp==$np)
	{
		$query="update login set pwd='$np' where username='$user'";
		mysqli_query($con,$query);
		//header("Location:dashboardpatient.php?msg=1");
		echo'<script>
		alert("Password Has Been Changed Successfully");
		</script>';
	}
	else
	{
		//echo "Confirm and New password are not matched ";
		echo'<script>
		alert("Confirm and New Password are not matched");
		</script>';
	}
}
else
{
	//echo "Invalid Old Password";
	
echo'<script>
		alert("Invalid Old Password");
		</script>';
}
}
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head"></div>
      <div class="bs-example5">
      	<h3>Change Password</h3></br>
		<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
									
			<div class="form-group">
              <label class="control-label">Enter Your Old Password </label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="op" required>
			</div>
			<div class="form-group">
              <label class="control-label">Enter Your New Password</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="np" required>
			</div>
			<div class="form-group">
              <label class="control-label">Confirm Your New Password</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="cnp" required >
			</div>
      
			<div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
		</div>
		
		</form>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>