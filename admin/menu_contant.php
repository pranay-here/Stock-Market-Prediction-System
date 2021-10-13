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
  $query="insert into menu_contant(m_id,sub_mid,contant,file) values('$m_menu','$s_menu','".addslashes($contant)."','".addslashes($file_name)."')";
 
  mysqli_query($con,$query);
  move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("content has been added successfully");
  </script>';
 
  }
 
?>   
<script>
  $(document).ready(function(){
	 $("#men").change(function(){
		 var men=$("#men").val();
		  $.post("get_value.php",{men_id:men},function(m){
			  //alert(m);
			  $("#sm").html(m);
		  });
		  });
		  
  })
</script>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Add Contant in  Sub_Menu </div>
      <div class="bs-example5"style="background-color: #d7e5ff">
      	
        <form action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">Select Main Menu Category
			
              <select class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" name="m_menu" id="men" required>
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
	 <!-- select sub_menu for add contant -->
	 
			 <div class="form-group">Select sub_menu Category</label>
              <select class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" id="sm" name="s_menu" required>
			  <option value="">--select--</option>
			
			  </select>
			</div>
			
			
			
			<div class="form-group"><div>Enter Contant</div>
			   <textarea name="contant" style="resize:none;height:100px;width:600px;"></textarea>
			</div>
			
			<div class="form-group"><div>Upload Contant File</div>
			   <input type="file" name="file" />
			</div>
			
			
			
		<button type="submit" name="submit" style="margin-top:4%;">Submit</button>
		</form>
		<br>
		<button type="submit" name="submit" style="margin-top:4%;"><a href="view_menu_contant.php">Manage</a></button>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>