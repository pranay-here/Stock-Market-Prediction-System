<?php
include("headers.php");
?>
 

	<div class="hero-image-wrap">
            <div class="container">
			
                <div class="row">
                    <div class="col-lg-12" style="z-index:5">
	 
	    <!-- here start slider code -->			
					<div class="g_slide" id="slides1">
						<div class="switch_main">
						<?php 
						$bns="select * from banner";
						$bnr=mysqli_query($con,$bns);
						while($bnro=mysqli_fetch_array($bnr))
						{
						?>
							<a class="item switch_item" href="#" style="width:100%;"><img data-src="upload/<?php echo $bnro['banner']; ?>"  style="height:400px; width:100%;"/></a>
							
						<?php
						}
						?>	
						</div>
					</div>
				

	
			
				 </div>
				 </div>
			 </div>
			</div>
                  
  <div class="container-fluid" id="graph">     
      <iframe   src="https://cmdatafeed.bonanzaonline.com/BseNseTicker.aspx" width="100%" height="60" style="background:#000; border:none;"></iframe> 
        </br>
        
    </div> 
     <div class="container">
         <iframe class="embed-responsive-item" src="https://cmdatafeed.bonanzaonline.com/homeIndexChart.aspx"   width="100%" height="360" style="background:#000; border:none;" allowfullscreen></iframe> 
    </div>
        
      
   
	
    <section class="services section-alt" style="padding-bottom:0px;">
	 
        <div class="container sd-effects-viewport">
		<h1 class="page-title title">Stock Management</h1>
		<style type="text/css">
      #tes a{
        text-decoration: none;
      } 
       #tes p{
       color: black;
      }      
        </style>
		<div class="container"> 
              <div class="row" id="tes">
                <div class="col-md-4 col-sm-6 text-center" >
                  <a href="javascript:void(0)"><img src="images/stock-01.png" alt="equity, stock markets" title="equity, stock markets">
                  <p><b>Equity and Stock Markets</b></p>
                  <p>Stock is a share in the ownership of a company; it represents a claim on the company's assets and earnings.</p></a>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                  <a href="javascript:void(0)"><img src="images/sbts-01.png" alt="Screen-Based Trading System by Bonanza" title="Screen-Based Trading System by Bonanza">
                  <p><b>Introduction of SBTS</b></p>
                  <p>With SBTS, it becomes possible for market participants to see the full market.</p></a>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                  <a href="javascript:void(0)"><img src="images/online trading-01.png" alt="Indian stock market, online trading mechanism" title="Indian stock market, online trading mechanism">
                  <p><b>Online Trading Mechanism</b></p>
                  <p>Online Trading by Bonanza provides the customers a seamless internet trading experience.</p></a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 col-sm-12 text-center" id="tes">
                  <a href="javascript:void(0)"><img src="images/contracts-01.png" alt="Forward Contract" title="Forward Contract">
                  <p><b>What are Contracts?</b></p>
                  <p>A Forward Contract is a customized contract between the buyer and the seller where settlement takes place on a specific date in future at a price agreed today.</p></a>
                </div>
              </div>   <br>

              <div class="row" id="tes">
                <div class="col-md-4 col-sm-6 text-center" >
                  <a href="javascript:void(0)"><img src="images/Terminologies-01.png" alt="Stock Trading Terminologies" title="Stock Trading Terminologies">
                  <p><b>Terminologies</b></p>
                  <p>Stock Trading Terminology is a unique technical language of stock market.</p></a>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                  <a href="javascript:void(0)"><img src="images/Derivatives-01.png" alt="What are derivatives" title="What are derivatives">
                  <p><b>What are Derivatives?</b></p>
                  <p>Derivatives are assets, which derive their values from an underlying asset.</p></a>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                  <a href="javascript:void(0)"><img src="images/Volatility-01.png" alt="What is volatility" title="What is volatility">
                  <p><b>What is Volatility?</b></p>
                  <p>Volatility is a statistical measure of the amount of fluctuation in a stock’s price within a period of time.</p></a>
                </div>
              </div>
            </div>
</div>

		</div>
          <!--  <div class="row">
                <div class="col-sm-4 sd-effect sd-fade-in">
                    <div class="sd-icon-box">
                        <span class="fa fa-cogs sd-icon sd-icon-boxed"></span>
                        <div class="sd-icon-text">
                            <h3 class="sd-icon-title">Mutual Fund.</h3>
                            <p class="sd-icon-copy">We are masters of the unknown. With experts totaling almost 200 years of professional experience, we know what to expect before anyone else.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sd-effect sd-fade-in">
                    <div class="sd-icon-box">
                        <span class="fa fa-wrench sd-icon sd-icon-boxed"></span>
                        <div class="sd-icon-text">
                            <h3 class="sd-icon-title">Mutual Fund Advisor.</h3>
                            <p class="sd-icon-copy">Our top-notch design team can bring any vision to life, whether it'’'s on handheld screens, the silver screen or right in front of your face.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sd-effect sd-fade-in">
                    <div class="sd-icon-box">
                        <span class="fa fa-cloud sd-icon sd-icon-boxed"></span>
                        <div class="sd-icon-text">
                            <h3 class="sd-icon-title">Equity Fund</h3>
                            <p class="sd-icon-copy">Each project requires a certain number of disciplines but can be influenced by others. We make it a point to never assume all loops have been closed.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 sd-effect sd-fade-in">
                    <div class="sd-icon-box">
                        <span class="fa fa-heart sd-icon sd-icon-boxed"></span>
                        <div class="sd-icon-text">
                            <h3 class="sd-icon-title"> Liquid Fund</h3>
                            <p class="sd-icon-copy">Part of what makes us successful is you. We take great pride in incorporating client feedback in key stages of development, allowing clients to always remain in the loop and on top of progress.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sd-effect sd-fade-in">
                    <div class="sd-icon-box">
                        <span class="fa fa-desktop sd-icon sd-icon-boxed"></span>
                        <div class="sd-icon-text">
                            <h3 class="sd-icon-title">Other Services</h3>
                            <p class="sd-icon-copy">Our industry-leading developers have yet to meet a problem they can’t code their way out of. A squadron of open-source contributors are ready to build your next million-dollar app.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sd-effect sd-fade-in">
                    <div class="sd-icon-box">
                        <span class="fa fa-laptop sd-icon sd-icon-boxed"></span>
                        <div class="sd-icon-text">
                            <h3 class="sd-icon-title">Deploy.</h3>
                            <p class="sd-icon-copy">Crossing the finish line. That is the goal and we’ll help see you to it. We have a dedicated staff for quality assurance and we offer maintenance services.</p>
                        </div>
                    </div>
                </div>
            </div>
       

-->
	   </div>
    </section>
	
	 <section class="homepage-blurbs section-alt">
        <div class="container">
            <div class="row sd-effects-viewport">
                <div class="col-sm-4">
					<a href="#" class="" data-toggle="modal" data-target="#myModal">
					
				 <h3 class="blurb-heading" style="text-align:center; padding-bottom:20px;">Share Your Details.</h3>
                    <div class="blurb-image-wrap sd-effect sd-fade-up sd-border">
                    <div class="blurb-image">
                        <img src="img/homepage2-blurb-1.jpg" alt="Image for first content box" style="width:210px; height:210px;"/>
                    </div>
                    </div>
					</a>
                </div>
			
			
			
			<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="">
  <div class="modal-dialog  modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <div class="form-header">
						<h3 class="f1">Enquiry/Request For Callback</h3>
					</div><!-- /.form-header -->
      </div>
      <div class="modal-body">
       <form class="banner-form" action="" method="post" >
					
					<div class="form-group">
					<div class="form-group">
    <label for="user">Name:</label>
   <input type="text" name="name" class="form-control" placeholder="Name....." required />
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
   <input type="email" name="email" class="form-control" placeholder="Email here..." required />
  </div>
  <div class="form-group">
    <label for="phone">Mobile:</label>
   <input type="number" name="phone" class="form-control" placeholder="Phone number..." required />
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
   <input type="text" name="address" class="form-control" placeholder="address here..." required />
  </div>
 
 <div class="form-group">
    <label for="text">Message:</label>
   <input type="text" name="message" class="form-control" placeholder="Message here.." required />
  </div>
  
						
						
						
						<button type="submit" name="enquiry" class="form-control">Submit</button>
					</div><!-- /.form-box -->
				</form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>



						<?php 
						
						if(isset($_POST['enquiry'])){
							extract($_POST);
							$to="prasoonshuklalko@gmail.com";
							$subject='There is a enquiry';
							$message=" name: $name contact: $phone  Message:$message Address: $address";
							$from=$email;
							
							mail($to,$subject,$message,$from);
							echo "<script>alert('Sent Successfully');</script>";
							
							
						}
						
				
						
						?>
			
			
			
			
			
			
			
			
                <div class="col-sm-4">
					<a href="#graph">
				 <h3 class="blurb-heading" style="text-align:center; padding-bottom:20px;">Tranding Graph</h3>
                    <div class="blurb-image-wrap sd-effect sd-fade-up sd-border">
                    <div class="blurb-image">
                        <img src="img/homepage2-blurb-2.jpg" alt="Image for second content box" style="width:210px; height:210px;"/>
                    </div>
                    </div>
					</a>
                   
                </div>
                <div class="col-sm-4">
					<a href="admin">
				 <h3 class="blurb-heading" style="text-align:center; padding-bottom:20px;">Portfolio Login</h3>
						
                    <div class="blurb-image-wrap last sd-effect sd-fade-up sd-border">
                    <div class="blurb-image">
                        <img src="img/homepage2-blurb-3.jpg" alt="Image for third content box"style="width:210px; height:210px;" />
                    </div>
                    </div>
					</a>
                   
                   
                </div>
            </div>
        </div>
    </section>
   
	
	
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
                        <input type="email"class="form-input homepage-subscribe-input" name="email" id="homepage-subscribe-input" placeholder="E-mail Address" required="" />
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
      echo "<script>alert('Thanks for Subscribe');window.location.href='index.php';</script>";
  }else{
        echo "<script>alert('Something wents wrong');window.location.href='index.php';</script>";
  }
}
?>
	<style>
	@media(max-width:420px){
		.h{
			display:none;
		}
	}
	</style>
   <section class="finance-retirement" style="padding: 30px 0;">
        <div class="container">
            <div class="row">
			  	        <div class="col-sm-12 col-lg-12" style="">
			              	<center><h3 class="section-title" style="font-weight: 900;">Our Products</h3></center>
	                </div>
                  <?php
    $selectproduct="select * from menu_contant limit 3";
    $prodcon=mysqli_query($con,$selectproduct);
    while($produc=mysqli_fetch_array($prodcon))
    {
      $sub_s=mysqli_query($con,"select sub_mname from sub_menu where sub_mid='$produc[sub_mid]'");
      $sub_r=mysqli_fetch_array($sub_s);
      
      ?>
      <style type="text/css">
        .thumbnail a:hover h4{
          color: red;
        }
      </style>
                  <div class="col-sm-12 col-lg-4" style="">
                    <div class="thumbnail">
      <a href="product.php?sm_id=<?php echo $produc['sub_mid']; ?>" style="text-decoration: none;">
       <img src="upload/<?php echo $produc['file']; ?>" style="height:300px; width:100%;" class="img-responsive"  />
        <div class="caption">
          <h4><?php echo $sub_r['sub_mname']; ?></h4>
        </div>
      </a>
    </div>
                     
		             </div>	
               <?php } ?>
			    	</div>
				</div>
    </section>
      <section class="finance-retirement" style="padding: 30px 0;">
        <div class="container">
           <div class="row">
      
      
                <div class="col-sm-12 col-lg-12">
        <div class="col-sm-12 col-lg-12">
                    <center><h2 class="section-title" style="font-weight: 900;">Latest Video</h2></center>
                </div>
        <?php
include ("connect.php");
$sel="select * from video limit 4";
$query=mysqli_query($con,$sel);
while($row=mysqli_fetch_assoc($query))
{
?>  
   
          <div class="col-sm-3 col-lg-3" style="margin-bottom:15px;">
          
          
          
           <iframe width="100%" height="145px" src="<?php echo $row['link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
                     </div>
<?php } ?>
           
                     </div>
        
        </div>
        
            </div>
    </section>
     <section class="homepage-counters" data-stellar-background-ratio="0.5" style="display:none;">
        <div class="container">
            <div class="row sd-effects-viewport">
                <div class="col-sm-3">
                    <p class="sd-counter counter sd-effect sd-fade-up">
                        <span class="numeral">197</span>
                        <span class="item">Years of Professional Expertise</span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p class="sd-counter counter sd-effect sd-fade-up">
                        <span class="numeral">12</span>
                        <span class="item">Consecutive Annual Awards</span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p class="sd-counter counter sd-effect sd-fade-up">
                        <span class="numeral">30</span>
                        <span class="item">Clients</span>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p class="sd-counter counter sd-effect sd-fade-up">
                        <span class="numeral">57</span>
                        <span class="item">Dedicated Professionals</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
	 <section class="homepage-counters" data-stellar-background-ratio="0.5" style="display:none;">
        <div class="container">
            <div class="row sd-effects-viewport">
    <div class="client-logos">
        <div class="client-wrap"><img src="img/client-1.jpg" alt="Client Logo" style="height:70px; width:150px;"/></div>
        <div class="client-wrap"><img src="img/client-2.jpg" alt="Client Logo" style="height:70px; width:150px;"/></div>
        <div class="client-wrap"><img src="img/client-3.jpg" alt="Client Logo" style="height:70px; width:150px;"/></div>
        <div class="client-wrap"><img src="img/client-4.jpg" alt="Client Logo" style="height:70px; width:150px;"/></div>
        <div class="client-wrap"><img src="img/client-5.jpg" alt="Client Logo" style="height:70px; width:150px;"/></div>
        <div class="client-wrap"><img src="img/client-6.jpg" alt="Client Logo" style="height:70px; width:150px;"/></div>
    </div>
    </div>
    </div>
   </section>


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
	

<?php
include("footer.php");
?>