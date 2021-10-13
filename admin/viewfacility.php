<?php 
include 'header.php';
include 'rightmenu.php';
include("../connect.php");
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Manage Image Category</div>
      <div class="bs-example5 table-responsive">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
        <th>Name</th>
		<th>Delete</th>
		<th>Update</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from facility order by f_id desc";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
          <td><?php echo $row['content']; ?></td>
          
		 <td><a href="delete_facility.php?id=<?php echo $row['f_id'] ?>" >Delete</a></td>
		<td><a href="edit_facility.php?id=<?php echo $row['f_id'] ?>" >Update</a></td>
        
      </tr>
      
	<?php $a++;  }  ?>
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>