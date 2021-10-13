<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Reservation Details</div>
      <div class="bs-example5">
      	<?php
		$query="select * from reservation order by r_id desc";
		$res=mysqli_query($con,$query);
		?>
		<table class="table">
		<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>No. Of Persons</th>
		<th>Date</th>
		
		<th>Time</th>
		<th>Comment</th>
		
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
			<td><?php echo $row['persons'];?></td>
			<td><?php echo $row['date'];?></td>
			
            <td><?php echo $row['time'];?></td>
			<td><?php echo $row['comment'];?></td>
			
			<td><a href="delete_reservation.php?id=<?php echo $row['r_id'];?>">Delete</a></td>
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