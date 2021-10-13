<!DOCTYPE html>
<?php
  error_reporting(0);
  include("headers.php");
?>


	<div class="hero-image-wrap">
           
			</div>
                  
       
		<?php
		$sub_mid=$_REQUEST['sm_id'];
		
		$select="select * from menu_contant where sub_mid='$sub_mid'";
		$res=mysqli_query($con,$select);
		if($row=mysqli_fetch_array($res))
		{
		?>
			
			<?php
			$sub_s="select  sub_mname from sub_menu where sub_mid='$sub_mid;'";
			$sub_r=mysqli_query($con,$sub_s);
			if($sub_ro=mysqli_fetch_assoc($sub_r))
			{
			?>
			 
			
				<center><h1><img src="img/m.png" alt="img" style="height:30px; width:40px; margin:0px 15px 5px 0px;" ><?php echo $sub_ro['sub_mname']; ?></h1></center>
			<?php
			}
			?>
				
    <section class="services section-alt" style="padding-bottom:15px;">
        <div class="container sd-effects-viewport">
	    
            <div class="row">
      <!-- here write cojbnjkm --->
			 <div class="col-lg-12">
			  <div class="row">
			   <div class="col-lg-5">
			    <img src="upload/<?php echo $row['file']; ?>" style="height:300px; width:100%;" class="img-responsive"  />
			   </div>
			   <div class="col-lg-7"><?php echo $row['contant']; ?></div>
			  </div>
			 </div>
			
			 </div>
        </div>
    </section>
	<?php
	}
	?>
		<!-- here type Products us of  -->
	
	
	
	
   <section class="homepage-quote" data-stellar-background-ratio="0.5" >
        <div class="container">
            <div class="row sd-effects-viewport">
                <div class="col-lg-12 col-sm-12">
                     <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h3 class="section-title">Let Us Know..</h3>
                    <p class="section-text">Subscribe to our e-mail newsletter and get updates. No worries, we won’t flood your inbox.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                      <form class="homepage-subscribe-form" action="" method="post">
                        <input type="email"class="form-input homepage-subscribe-input" name="email" id="homepage-subscribe-input" placeholder="E-mail Address"  required />
                        <input type="submit" name="sub_submit" class="btn btn-primary homepage-subscribe-submit" id="homepage-subscribe-submit" value="Subscribe" />
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>
 <?php
  if(isset($_POST['sub_submit'])){
  extract($_REQUEST);
                             
  $query=mysqli_query($con,"insert into subscribe(email) values('".addslashes($email)."')");
  if($query){
     // mail($to,$subject,$message,$headers);
      echo "<script>alert('Thanks for Subscribe');</script>";
  }else{
        echo "<script>alert('Something wents wrong');</script>";
  }
}
?>
   <?php
	include("footer.php");
	?>


    </div>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="lib/jquery-1.10.2.min.js"></script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="../../npmcdn.com/imagesloaded%404.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/timeline.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/effects.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/progressive-parallax.js"></script>
    <script src="js/youtube.js"></script>
    <script src="js/options.js"></script>
	
	
<script src="lib/switchable.js"></script> 
<script>
$(function(){
	switchable({
		$element: $('#slides')
		,interval: 2000
		,animateSpeed: 500
		
	});
	switchable({
		$element: $('#slides1')
		,interval: 2000
		,effect: 'fade'
	});
	switchable({
		$element: $('#scroll_wrap')
		,interval: 2000
		,showNav: true
		//,effect: 'fade'
		,type: 'imgScroll'
		,imgScroll: {
			num: 2
		}
	});
});
</script>
	
</body>

</html>