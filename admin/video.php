<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
 
  if(isset($_POST['submit']))
  {
  extract($_POST);
   $s=str_replace("watch?v=","embed/",$link);
  $query="insert into video(link) values('$s')";
  mysqli_query($con,$query);
  
 
  echo'<script>
  alert("Content has been added successfully");
  </script>';
  }
 
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add Video Link</div>
      <div class="bs-example5" style="background-color: #d7e5ff">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
			
			
			<div class="form-group">
			<label>Video Link</label>
			<input type="text" name="link" class="form-control1"/>
			</div>
			
			
			
			
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<button type="submit" name="submit" style="margin-top:4%;" style="color: black;"><a href="viewvideo.php">Manage</a></button>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>