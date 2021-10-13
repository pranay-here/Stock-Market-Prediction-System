<?php 

extract($_POST);
$to="indiamoney2007@yahoo.co.in";
							$subject='Subscription';
							$message="i want to subscribe to news latter";
							$from=$email;
							
							mail($to,$subject,$message,$from);
							echo "<script>alert('Sent Successfully');
							
							window.location.href='index.php';
							</script>";
							
							?>