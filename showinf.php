<!DOCTYPE html>
<?php
error_reporting(0);
include("headers.php");
?>
   
	<div class="body">    <header>
        <div class="container">
            <div class="row">
			 <div class="col-sm-12"><h1>About Us</h1></div>
                <div class="col-sm-12">
	<!-- here coad start  -->
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
			 
			
				<center><h1><?php echo $sub_ro['sub_mname']; ?></h1></center>
			<?php
			}
			?> 
                </div>
            </div>
        </div>
    </header>
    <section class="intro">
        <div class="container">
            <div class="row sd-effects-viewport">
                <div class="col-sm-6">
                    <h2 class="page-byline sd-effect sd-fade-in">We believe in giving you satisfaction first, quality second, excuses never.</h2>
                    <p class="sd-effect sd-fade-up"><div class="col-lg-9"><?php echo $row['contant']; ?></div> </p>
                </div>
                <div class="col-sm-6">
                    <div class="intro-img sd-effect sd-fade-left">
                          <img src="upload/<?php echo $row['file']; ?>" style="height:300;width:100%;" class="img-responsive"  />
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<?php
	}
	?>
	
				

   <?php
	include("footer.php");
	?>
           </div>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
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
</body>

<!-- Mirrored from themes.skylitedev.com/India Money/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 07:54:56 GMT -->
</html>