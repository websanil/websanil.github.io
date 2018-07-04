<?php
	$to = "munotornaments@yahoo.co.in";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["phone"];
	$msg = $_POST["msg"];
	$subject = "Munot Ornaments Annex";
	$message="
		Name: $name
		Mobile: $mobile
		Email: $email
		Query: $msg";
	
	$header = "Munot Ornaments Annex";
	if($_POST){
		if($email == '' || $name == '' || $mobile == '' || $msg == ''){
			$feedback = 'Fill out all details';
		}
		else{
			mail($to, $subject, $message, $header);
			$feedback = 'Thank You for Contacting us. We will get back to you as soon as possible.';
			
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 It-Geeks
        ********************************************************************************************************** 
        -->
    
<!-- Mirrored from preview.itgeeksin.com/jewellery-shop/contact-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2017 09:38:34 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="Munot Ornaments | Munot Ornaments Annex | Munot Annex | Munot Jewellers | QUICK | 25YEAR OLD ORGANIZATION | ACHIEVED TREMENDOUS REPUTATION | ANNEX 25YEAR OLD | ANTIQUE GOLD BASED | QUICK VIEW | VIEW QUICK | TAKEN CARE" />
        <meta name="description" content="Jewellery Shop |Munot Ornaments | Munot Ornaments Annex | Munot Annex | Munot Jewellers | QUICK | 25YEAR OLD ORGANIZATION | ACHIEVED TREMENDOUS REPUTATION | ANNEX 25YEAR OLD | ANTIQUE GOLD BASED | QUICK VIEW | VIEW QUICK | TAKEN CARE" />
        <meta name="author" content="Sanil Rodrigues" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Munot Ornaments</title>
        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
        <link href="assets/plugin/switcher/css/switcher.css" rel="stylesheet">
        <link href="assets/css/color.css" rel="stylesheet" id="colors">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            
            <!--//==top bar start==//-->
            
            <div class="top-middle-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row pad-top-bottom25 head-top-sec">
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <figure class="logo-box">
                                        <img alt="logo"  src="assets/img/1.png" height="90" width="180"></a>
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="select-box">
										<div class="language-box2 top ">
                                            <p><a href="tel:02222404776"><i class="fa fa-phone" aria-hidden="true"></i>022 2240 4776</a></p>
                                        </div>
										<div class="language-box2 top ">
                                            <p><a href="mailto:munotornaments@yahoo.co.in"><i class="fa fa-envelope-o" aria-hidden="true"></i>munotornaments@yahoo.co.in</a></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//==mega menu start==//-->
            <div id="main-menu" class="wa-main-menu">
                <!-- Menu -->
                <div class="wathemes-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default navbar-bg-dark" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="navbar-header pad-top15 pad-bottom15">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span>
                                        </button>
                                        <div class="icons-section boxx pull-right">
                                            
                                        </div>
                                        <a class="navbar-brand hidden-sm hidden-md hidden-lg logo-second" href="index-2.html">
                                        <img alt="logo"  src="assets/img/1.png" height="60" width="180"></a>
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="contact.php">
                                                Contact
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- navbar-collapse -->
                                </div>
                                
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!--  Menu -->
            </div>
            <!--//==mega menu end==//-->
        </header>
        <!--//==top bar End==//-->
        <div class="breadcrumb-section-box">
            <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                <div class="bg-image" style="background-image:url('assets/img/slider5.jpg');"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pad-top100 pad-bottom100 heading-box">
                        <h3 class="heading-breadcrumb box-z text-center">Contact</h3>
                        <div class="clear"></div>
                        <div class="headding-icons">
                            <ul>
                                <li><span class="mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>
                                <li><span class="style mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>
                                <li><span class="mar-top15"><i class="fa fa-diamond" aria-hidden="true"></i></span></li>
                            </ul>
                        </div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a class="sab-heading-breadcrumb box-z" href="index.html">home</a>
                                </li>
                                <li class="heading-wa box-z activ">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-griad">
            <div class="container">
                <div class="row">
                <div class="message-sec-boxs pad-top80 pad-bottom80">
                    
					<div class="col-md-12">
                        <h2 class="theme-headdings">Our Location</h2>
                        <div class="map-box pad-top30">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15094.314836353367!2d72.8299716!3d18.9500329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74402f300805f354!2sMunot+Ornaments+Annex!5e0!3m2!1sen!2sin!4v1500225400666" width="600" height="498" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!---->
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row pad-bottom80">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-loction-box">
                                    <span class="loction-icon-box"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <h4 class="theme-headdings text-center address-title">Our Location</h4>
                                    <p>Shop no A12/13/14, Ground Floor, Glitz Mall, 99-Vithalwadi, Kalbadevi, Mumbai-400002</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                <div class="contact-loction-box">
                                    <span class="loction-icon-box"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <h4 class="theme-headdings text-center address-title">Contact No.</h4>
                                    <p><a href="tel:02222404776">+(022) 2240 4776</a><br><a href="tel:9820364873">+91 9820364873</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 responsive-top">
                                <div class="contact-loction-box">
                                    <span class="loction-icon-box"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <h4 class="theme-headdings text-center address-title">Email</h4>
                                    <p><a href="mailto:munotornaments@yahoo.co.in">munotornaments@yahoo.co.in</a><br><a href="mailto:support@munotornaments.in">support@munotornaments.in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="siad-bar-sec">
                        <h3 class="theme-headdings">Leave Us Message</h3>
                        <div class="row pad-top25">
							<form action="?" method="POST">
								<div class="col-md-6 Profile setting box">
									<p>
										<label>First Name</label>
										<input type="text" name="name" class="search_terms" placeholder="" required>
									</p>
									<p>
										<label>Email Address</label>
										<input type="email" name="email" class="search_terms" placeholder="" required>
									</p>
									<p>
										<label>Phone</label>
										<input type="text" name="phone" class="search_terms" placeholder="" required>
									</p>
								</div>	
								<div class="col-md-6 Profile setting box">	
									<p>
										<label>Message</label>
										<textarea name="msg" cols="10" rows="4" placeholder="" id="order_comments" class="form-controller search_terms" name="order_comments"></textarea>
									</p>
									<button type="submit" class="itg-button mar-top20">Send Message</button>
									<p id="feedback"><strong><?php echo "$feedback"; ?></strong></p>
								</div>
							</form>	
                        </div>
                    </div>
                </div>
            </div><br>
        <!--//===footer-main-section Start==//-->
        <footer>
            <div class="footer-main-section">
                <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                    <div class="bg-image" style="background-image:url('assets/img/all/footer-bg.jpg');"></div>
                </div>
                
                <div class="footer-bottom-bar pad-top-bottom25">
                    <p>Copyright © 2017-2018 <span class="footer-text">Munot Ornaments Annex</span> and All Rights Reserved. Designed by  <span class="footer-text"><a href="http://web21cen.in">Web21Cen</a></span></p>
                </div>
            </div>
        </footer>
        
        <!--//===footer-main-section End==//-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugin/owl-carousel-slider/js/owl.carousel.min.js"></script>
        <script src="assets/plugin/menu-menu/js/hover-dropdown-menu.js"></script>
        <script src="assets/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>
        <script src="assets/plugin/fancyBox/js/jquery.fancybox-media.js"></script>
        <script src="assets/plugin/vertical-slider/js/jquery.bxslider.js"></script>
        
        <script src="assets/plugin/menu-menu/js/jquery.hover-dropdown-menu-addon.js"></script>
        <script src="assets/plugin/switcher/js/switcher.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/main.js"></script>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-103800517-1', 'auto');
		  ga('send', 'pageview');

		</script>
    </body>

<!-- Mirrored from preview.itgeeksin.com/jewellery-shop/contact-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2017 09:38:34 GMT -->
</html>