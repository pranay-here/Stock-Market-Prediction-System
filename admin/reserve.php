<?php 
include 'header.php';
include 'rightmenu.php';
include("../connect.php");
?>
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Banquet Reservation</div>
      <div class="bs-example5 table-responsive">
		<table class="table table-hover ">
    <thead>
      <tr>
        <th>s.no.</th>
        <th>Name</th>
		<th>Person</th>
		<th>Mobile No.</th>
		<th>Email</th>
		<th>Preferred Date</th>
		<th>Preferred Time</th>
		<th>Delete</th>
        
        
      </tr>
   </thead>
    
    <tbody>
	<?php
	
	$a=1;
	$query="select * from banquate_reservation order by b_id desc";
	$res=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		
		
			?>
			 <tr>
			   <td><?php echo $a ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['person']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['time']; ?></td>
          
		 <td><a href="delete_reserve.php?id=<?php echo $row['b_id'] ?>" >Delete</a></td>
		
        
      </tr>
      
	<?php $a++;  }  ?>
                                </tbody>
		
		
		</table>
</div></br>


     
        <?php include 'footer.php';?>
      
  </div>
</div>