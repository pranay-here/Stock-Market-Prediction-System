<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Contact Us Details</div>
      <div class="bs-example5"style="background-color: #d7e5ff">
      	<?php
		$query="select * from contact order by id desc";
		$res=mysqli_query($con,$query);
		?>
		<table class="table">
		<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Email</th>
		
		<th>Phone</th>
		<th>Message</th>
		
		<th>Delete</th>
		</tr>
		<?php
		$a=1;
		while($row=mysqli_fetch_assoc($res))
		{
			
			?>
			<tr>
			<td><?php echo $a;?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			
            <td><?php echo $row['phone'];?></td>
			<td><?php echo $row['message'];?></td>
			
			<td><a href="delete_message.php?id=<?php echo $row['id'];?>">Delete</a></td>
				</tr>
			
			
			<?php
		$a++;
		}
		?>
		</table>
		
      </div></br>
     
        <?php include 'footer.php';?>
      
  </div>
</div>