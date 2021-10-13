<?php 
include 'header.php';
include 'rightmenu.php';
include("../connect.php");
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Manage Services</div>
      <div class="bs-example5 table-responsive" style="background-color: #d7e5ff">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
        
        <th>Content</th>
		 <th>Location</th>

		<th>Image</th>
		<th>Delete</th>
		<th>Update</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from service order by s_id desc";
	$res=mysqli_query($query);
	while($row=mysqli_fetch_assoc($res))
	{
		
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
			   
			    <td><?php echo $row['heading']; ?></td>
				 <td><?php echo $row['content']; ?></td>
			  

		  <td><img src="../upload/<?php echo $row['image'] ?>" height="200" width="200" ></td>
        <td><a href="delete_service.php?id=<?php echo $row['s_id'] ?>" >Delete</a></td>
		<td><a href="edit_service.php?id=<?php echo $row['s_id'] ?>" >Update</a></td>
        
      </tr>
      
	<?php $a++;  }  ?>
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>