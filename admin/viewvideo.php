<?php 
include 'header.php';
include 'rightmenu.php';
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">view Videos</div>
      <div class="bs-example5 table-responsive" style="background-color: #d7e5ff">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
     
        <th>Link</th>
		
		<th>Delete</th>
		<th>Update</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	include "../connect.php";
	$a=1;
	$query="select * from video";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
 
          <td><?php echo $row['link']?></td>
          
		  
		  
		  <td><a href="delete_video.php?id=<?php echo $row['v_id'] ?>" >Delete</a></td>
		<td><a href="edit_video.php?id=<?php echo $row['v_id'] ?>" >Update</a></td>
        
      </tr>
      
	<?php $a++;  }  ?>
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>