<?php 
include 'header.php';
include 'rightmenu.php';
include("../connect.php");
?>
  <script>
   function del()
   {
	   var c=confirm("are you sure ??");
	   if(c==true)
	   {
		   return true;
	   }
	   else
	   {
		return false;   
	   }
   }
  </script>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Manage Projects</div>
      <div class="bs-example5 table-responsive" style="background-color: #d7e5ff">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
        <th>Main Menu Category</th>
        <th>Sub Menu</th>
        <th>contant</th>
        <th>Image</th>
		<th>Update</th>
		<th>Delete</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from menu_contant";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		$mi=$row['m_id'];
		$ms="select * from menu where m_id='$mi'";
		$mres=mysqli_query($con,$ms);
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
			   
			   <?php
			     if($mro=mysqli_fetch_array($mres))
				{
				?> 
			   <td><?php echo $mro['menu']; ?></td>
			   <?php 
				}
			   ?>
			<!-- here select name sub menu ******** -->  
			   <?php $sub_mid=$row['sub_mid']; 
			      $s_sm="select * from sub_menu where sub_mid='$sub_mid'";
				  $s_res=mysqli_query($con,$s_sm);
				  if($s_row=mysqli_fetch_array($s_res))
				  {
			   ?>
			     <td><?php echo $s_row['sub_mname']; ?></td>
			    <?php
				  }
				?>
				<td><?php echo $row['contant']; ?></td>
				<td><img src="../upload/<?php echo $row['file']; ?>" style="height:50px;width:50px;"></td>
				
			   <td><a href="edit_contant.php?cid=<?php echo $row['con_id']; ?>" onclick="return del()"> Update </a></td>
			   
			   <td><a href="delete_contant.php?cid=<?php echo $row['con_id']; ?>&fil=<?php echo $row['file']; ?>" onclick="return del()" > Delete </a></td>
			</tr>
			<?php
			  $a++; }
			?>
		 
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>