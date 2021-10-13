<!DOCTYPE html>
<?php
  error_reporting(0);

?>

	<!DOCTYPE html>
<?php

 include("headers.php");
 include("connect.php");
?>
	
		<!-- here type Products us of  -->
			<div class="col-sm-12 about">
						<center><h1>Calculator</h1></center>
			
			</div>
	
	
   
	<style>
	table{
		border: #FF3374 3px solid !important;
	}
	
	.d{
		border:4px solid #3399ff;
		
	}
	li{
		list-style-type: none;
	}
	</style>
	
   <section class="finance-retirement" style="background:silver !important;">
        <div class="container">
            <div class="col-sm-12 " >
           	
				<h3 style="text-align:center; border:2px solid black; padding:4px 0px 4px 0px;">How much SIP you should start to recover the EMI paid by you for a loan</h3>
				 
				 <div class="col-sm-6">
				<iframe src="emi.php" class="col-sm-12" frameborder="0" style=" height:500px;; border:2px solid grey;"></iframe>
					
					
					</div>
				<div class="col-sm-6">
				
				<iframe src="emir.php" frameborder="0" class="col-sm-12"style="height:500px;; border:2px solid grey;"></iframe>
				 </div>
				</div>
				
				
				
				<div >
				
				
				<div class="col-sm-6" >
<li>
<h3>SIP  Calculator</h3>
<iframe id="myframe"  frameborder="0" width="302" height="260" style="background:#3399ff;" scrolling="auto" src="http://my-eoffice.com/sip_calc.php?" name="iframe"></iframe></li>
</div>

				</div>
				
				
				


<div class="col-sm-6">
<li>
<h3>Education Planning Calculator</h3>
<iframe id="myframe"  frameborder="0" width="382" height="460"  style="background:#3399ff;" scrolling="auto" src="http://my-eoffice.com/Education_calc.php?" name="iframe"></iframe></li>
</div>

		
<div class="col-sm-6">
<li>
<h3>Marriage Planning Calculator </h3>
<iframe id="myframe"  frameborder="0" width="380" height="460"  style="background:#3399ff;"scrolling="auto" src="http://my-eoffice.com/marriage_calc.php?" name="iframe"></iframe></li>
</div>

				
				
					

<div class="col-sm-6">
<li>
<h3>Retirement Planning Calculator	</h3>
<iframe id="myframe"  frameborder="0" width="394" height="460" style="background:#3399ff;" scrolling="auto" src="http://my-eoffice.com/retierment_calc.php?" name="iframe"></iframe></li>
</div>

				

</ul>
          
        </div>
    </div>
	</section>
  

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
	
	
		<script>
      window.onload=function myFunction() {
    var x = document.getElementById("myframe");
    var y = (x.contentWindow || x.contentDocument);
    if (y.document)y = y.document;
    y.body.style.backgroundColor = "red";
}
      
     
    </script>

	
</body>

<!-- Mirrored from themes.skylitedev.com/India Money/index-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 07:49:35 GMT -->
</html>