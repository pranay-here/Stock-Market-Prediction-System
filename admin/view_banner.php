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
    <div class="widget_head">Manage Main Category</div>
      <div class="bs-example5 table-responsive" style="background-color: #d7e5ff">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
        <th>Banner </th>
		<th>Delete</th>
		<th>Update</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from banner ";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
          <td><img src="../upload/<?php echo $row['banner']; ?>" width="100" height="100"></td>
          
		<td><a href="edit_banner.php?bid=<?php echo $row['bn_id'] ?>" onclick="return del()" >Update</a></td>
		 <td><a href="delete_banner.php?bid=<?php echo $row['bn_id'] ?>&fi=<?php echo $row['banner']; ?>" onclick="return del()" >Delete</a></td>
        
      </tr>
      
	<?php $a++;  }  ?>
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>