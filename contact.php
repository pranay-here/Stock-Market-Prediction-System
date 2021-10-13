<!DOCTYPE html>
<?php
include("headers.php");
if(isset($_POST['submit'])){
  extract($_REQUEST);
  $date=date("Y/m/d");
  $to="nazir.m1logixindia@gmail.com";
                              $from=$_POST['email'];  
                                $headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                
                                $headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" ;


                                
                                
                                $subject="Information From Contact Form";
                                
                            
                                
                                $message = '<html><body>';

$message .= '<h1 style="color:#f40;">Golden Salon</h1>';
$message .= '<p style="color:#080;font-size:18px;">Applicant,</p>';



$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

$message .= "<tr><th><strong>Name :</strong> </th><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><th><strong>Mobile Number:</strong> </th><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><th><strong>Email:</strong> </th><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><th><strong>Message:</strong> </th><td>" . strip_tags($_POST['massage1']) . "</td></tr>";


$message .= "</table>";


$message .= "</body></html>";

                                
                                
                                
                            /*----------------------------------------------*/
                                
                               
  $query=mysqli_query($con,"insert into contact(name,email,phone,message) values('".addslashes($name)."', '".addslashes($email)."', '".addslashes($phone)."', '".addslashes($massage1)."')");
  if($query){
     // mail($to,$subject,$message,$headers);
      echo "<script>alert('Message Send Successfully');</script>";
  }else{
        echo "<script>alert('Something wents wrong');</script>";
  }
}
?>
   
	<div class="body">

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <center> <h1 class="page-title title">Contact Us</h1></center>
                </div>
            </div>
        </div>
    </header>
	<!-- here show location -->
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227822.55035627162!2d80.8024271802209!3d26.84862299412667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1619431695096!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <p>Market prediction offers great profit avenues and is a fundamental stimulus for most researchers in this area. To predict the market, most researchers use either technical or fundamental analysis. Technical analysis focuses on analyzing the direction of prices to predict future prices, while fundamental analysis depends on analyzing unstructured textual information like financial news and earning reports. More and more valuable market information has now become publicly available online.</p>
    <section class="section-alt">
        <div class="container">
		<div class="col-sm-6">
		<h2 style="margin-bottom:25px;">Send Us a Message</h2>
            <form action="" method="POST">
                <div class="col-sm-12 section-alt sd-effects-viewport">
                    <div class="col-sm-6 sd-effect sd-fade-right">
	<!-- here form code  -->
                        <input type="text" class="form-input" name="name" placeholder="Name" />
						
                        <input type="email" class="form-input" name="email" placeholder="E-mail" />
						
                        <input type="number" class="form-input" name="phone" placeholder="Phone" />
                    </div>
                    <div class="col-sm-6 sd-effect sd-fade-left">
                        <textarea class="form-input form-textarea" name="massage1" placeholder="Comments"></textarea>
						
                        <input type="submit" class="btn btn-primary pull-right" name="submit" value="Send" />
                    </div>
					
					
                </div>
            </form>
			</div>
			
			<div class="col-sm-6">
                    <div class="col-sm-12">
                        <div class="logo"></div>
						<br>
							<br>
								<br>
                        <p></p>
                        <p style="font-size:18px;">Address : Lucknow <br />
                        
                         Mobile: 9876543210<br />
                        
                            Email: abc@gmail.com <a href="#"></a><br />
                        </p>
                    </div>
        </div>
    </section>


	<!-- here start footer -->
	      <?php
		  include("footer.php");
		  ?>