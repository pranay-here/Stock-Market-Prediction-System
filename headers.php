<!DOCTYPE html>
<?php

 include("connect.php");
?>
<html lang="en" class="">

<!-- Mirrored from themes.skylitedev.com/India Money/index-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 07:47:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Market 
	</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300italic,400,600,700%7COpen+Sans:300,300italic,400,600%7CRoboto:100,300,500,700,900%7CArimo" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/layout.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="css/charts.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/pricing.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/subpage.css">
    <link rel="stylesheet" href="css/effects.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/options.css">
		
	<link href="lib/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="lib/style.css" />
    
    
</head>
<body class="page-">
    <div class="wrapper">    
	<div class="nav-bars">
        <div class="utility-and-social-wrapper">
            <div class="container">
                <div class="utility-and-social">
                    <nav class="utility-nav clearfix">
                        <ul>
                            
                            
                           
                        </ul>
                    </nav>
                    <nav class="social-links">
                        <ul>
                           
                       
  
                        </ul>
                    </nav>
                </div>
            </div>
        </div>        
		
		<nav class="navbar navbar-default main-nav clearfix" data-spy="affix" data-offset-top="45" style="z-index:10">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" style="text-decoration: none;"> <h2 class="">Stock Market</h2></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                               
			<!-- here start menu -->
			
					                             
					<div class="nav-and-search collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav-list">
				<div >
                    <li class="dropdown nav-item">
                        <a href="index.php" class="nav-link dropdown-toggle" id="nav-home" >Home</a>
                      
                    </li>
					
					
                   
		<!-- here start code for select sub menu of about  -->
					 <li class="dropdown nav-item">
                        <a href="showinf.php" class="nav-link dropdown-toggle" >About Us</a>
                    
                    </li>
					
				<!-- here start code for select sub menu of about  -->
					 <li class="dropdown nav-item">
                        <a href="#" class="nav-link dropdown-toggle">Products</a>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
							  <?php
							   $abq="select * from sub_menu where m_id='3'";
							   $abr=mysqli_query($con,$abq);
							   while($abro=mysqli_fetch_array($abr))
							   {
							  ?>
                                <li><a href="product.php?sm_id=<?php echo $abro['sub_mid']; ?>"><?php echo $abro['sub_mname']; ?></a></li>
                            
                               <?php
							   }
							   ?>
                            </ul>
                        </div>
                    </li>
		<!-- here start code for select sub menu of Services  -->
					 <li class="dropdown nav-item">
                        <a href="#" class="nav-link dropdown-toggle">Services</a>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
							  <?php
							   $abq="select * from sub_menu where m_id='4'";
							   $abr=mysqli_query($con,$abq);
							   while($abro=mysqli_fetch_array($abr))
							   {
							  ?>
                                <li><a href="services.php?sm_id=<?php echo $abro['sub_mid']; ?>"><?php echo $abro['sub_mname']; ?></a></li>
                            
                               <?php
							   }
							   ?>
                            </ul>
                        </div>
                    </li>
					
			<!-- here start code for select sub menu of ca  -->
			       <li class="dropdown nav-item">
                        <a href="calculator.php" class="nav-link dropdown-toggle" >Calculators</a>
                    
                    </li>
					
			<!-- here start code for select sub menu of ca  -->
					<li class="dropdown nav-item">
                        <a href="contact.php" class="nav-link dropdown-toggle" >Contact Us</a>
                    
                    </li>
				
			<!-- here end my code  -->
					
					</div>
                </ul>
            <!--   <a href="https://indiamoney.wealthmagic.in/" class="btn btn-md" style="margin-top:15px;">Portfolio Login</a>-->
			   
				<span> &nbsp;&nbsp;&nbsp;</span>
				  
				
				</div>
			<!-- here end menu -->
				
                        </div>			
        </nav>
    </div>  
