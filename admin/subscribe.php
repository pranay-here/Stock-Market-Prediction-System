<?php 
  include'header.php'; 
  include 'rightmenu.php';
  include("../connect.php");
  ?>
  
<div id="page-wrapper">
	<div class="graphs">
    <div class="widget_head">Subscribers List </div>
      <div class="bs-example5" style="background-color: #d7e5ff">
      	<?php
		$query="select * from subscribe ";
		$res=mysqli_query($con,$query);
		?>
		<table class="table">
		<tr>
		<th>S.No.</th>
		<th>Email</th>
		
		</tr>
		<?php
		$a=1;
		while($row=mysqli_fetch_assoc($res))
		{
			
			?>
			<tr>
			<td><?php echo $a;?></td>
			<td><?php echo $row['email'];?></td>
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