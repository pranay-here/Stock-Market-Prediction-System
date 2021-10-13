<?php 
include 'header.php';
include 'rightmenu.php';
include("../connect.php");
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Manage Gallery</div>
      <div class="bs-example5 table-responsive" style="background-color: #d7e5ff">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
        <th>Category</th>

		<th>Image</th>
		<th>Delete</th>
		<th>Update</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from gallery order by id desc";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
			   <td><?php echo $row['category']; ?></td>

		  <td><img src="../upload/<?php echo $row['image'] ?>" height="200" width="200" ></td>
        <td><a href="delete_gallery.php?id=<?php echo $row['id'] ?>" >Delete</a></td>
		<td><a href="edit_gallery.php?id=<?php echo $row['id'] ?>" >Update</a></td>
        
      </tr>
      
	<?php $a++;  }  ?>
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>