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
		<th>Delete</th>
		<th>Update</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from sub_menu";
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
			   <td><?php echo $row['sub_mname']; ?></td>
			   <td><a href="edit_menu.php?mid=<?php echo $row['sub_mid']; ?>" onclick="return del()"> Update </a></td>
			   <td><a href="delete_menu.php?mid=<?php echo $row['sub_mid']; ?>" onclick="return del()" > Delete </a></td>
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