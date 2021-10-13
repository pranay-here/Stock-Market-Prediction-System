<!DOCTYPE html>
<?php
error_reporting(0);
include("headers.php");
?>
 

	<div class="body">

    
       
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
			  <img src="upload/<?php echo $row['file']; ?>" style="height:300px;width:100%;" class="img-responsive"  />
			  </div>
			  <div class="col-lg-7">
			  <?php echo $row['contant']; ?>
			   </div>
			    </div>
			    </div>
			  
			  
                </div>
                
			</section>
			<?php
		}
			?>
			<div><h2></h2></div>
			
	

			
		<!-- here end code -->
                </div>
            </div>
        </div>
		
 
<section class="blog-section" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="container container-no-pad blog-container sd-effects-viewport">
                   
                    
          
                </div>
                <div class="paginator">
                    <a href="#" class="page-prev"><span class="fa fa-angle-double-left"></span><span class="sr-only">Previous Page</span></a>
                    <a href="#" class="page-numeral selected"><span class="sr-only">Page </span>1</a>
                    <a href="#" class="page-numeral"><span class="sr-only">Page </span>2</a>
                    <a href="#" class="page-numeral"><span class="sr-only">Page </span>3</a>
                    <a href="#" class="page-numeral"><span class="sr-only">Page </span>4</a>
                    <a href="#" class="page-next"><span class="fa fa-angle-double-right"></span><span class="sr-only">Next Page</span></a>
                </div>
            </div>
            <div class="col-sm-3">
                
               
        </div>
    </div>
</section>
  <!-- here start footer -->
  
		  <?php
	include("footer.php");
	?>
  <!-- here End footer -->

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

<!-- Mirrored from themes.skylitedev.com/projections/blog-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 07:58:45 GMT -->
</html>