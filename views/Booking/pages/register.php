<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/views/Booking/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/views/Booking/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/views/Booking/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/views/Booking/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/views/Booking/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/views/Booking/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/views/Booking/css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="/views/Booking/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="/views/Booking/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/views/Booking/css/style.css">

	<!-- Modernizr JS -->
	<script src="/views/Booking/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>


                     
		<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="/Booking">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="/Booking">Αρχική</a></li>
								<li><a href="/booking/activity">Δραστηριότητες</a></li>
								<li><a href="/booking/rent">Ενοικιαστηκά Γραφεία</a></li>
                                <li><a href="/booking/tours">Εκδρομηκά Γραφεία</a></li>
								<li><a href="/booking/tickets">Εισητήρια</a></li>
								<li  class="active"><a href="#">Σύνδεση</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(/views/Booking/images/login.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Εγγραφή</h2>
				   					<h1 style="font-size:40px;">Γραφτείτε εύκολα και γρήγορα</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   
			 
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation" style="background-color:#b1c9f9;padding:20px;">
			<!-- <div class="container"> -->
				<div class="row ">
					<div class="container">
			   			<div class="row justify-content-center">
				       
                          
                                      
                            	<div class="col-md-4  col-sm-12 col-xs-12 slider-text" style="float:left;">
				   				<div class="slider-text-inner text-center">
                                     <h3>Είσοδος</h3>
                                    <br>
                                     
				   					<form style="padding:10px;" action="/booking/login" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:white;">Email</label>
    <input type="email" style=" background-color:white;" class="form-control" id="exampleInputEmail1" aria-describedby="email" name="email" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:white;">Κωδικός</label>
    <input type="password"  style=" background-color:white;" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Κωδικός">
  </div>
                                        
<?php if(isset($_SESSION['msg1'])): ?>
<?php echo $_SESSION['msg1'] ?>
<?php  unset($_SESSION['msg1'])?>
<?php endif ?>
 
  <button type="submit" class="btn btn-primary btn-block">Σύνδεση</button>
</form>
                                    
                                   
                                    
                                    
				   				</div>
				   			</div>
                            
                            
                           
                            	<div class="col-md-4  col-sm-12 col-xs-12 slider-text" style="float:right;">
				   				<div class="slider-text-inner text-center">
                                    <h3 >Εγγραφή</h3>
                                      <br>
				   					<form style="padding:10px;" action="/booking/register" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:white;">Email</label>
    <input type="email" style=" background-color:white;" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="email" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:white;">Κωδικός</label>
    <input type="password"  style=" background-color:white;" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Κωδικός" required>
  </div>
                                        
<div class="form-group">
    <label for="exampleInputPassword1" style="color:white;">Επαλύθευση Κωδικού</label>
    <input type="password"  style=" background-color:white;" class="form-control" name="repeatpwd" id="exampleInputPassword1" placeholder="Κωδικός" required>
  </div>
                                        
<?php if(isset($_SESSION['msg'])): ?>
<?php echo $_SESSION['msg'] ?>
<?php  unset($_SESSION['msg'])?>
<?php endif ?>
 
  <button type="submit" class="btn btn-primary btn-block">Εγγραφή</button>
</form>
                                    
                                   
                                    
                                    
				   				</div>
				   			</div>
                            
				   		</div>
			   		</div>
				</div>
			</div>
            
		</div>
        
        
        


        
        
        
	
	
        
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="/views/Booking/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/views/Booking/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/views/Booking/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/views/Booking/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/views/Booking/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="/views/Booking/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/views/Booking/js/jquery.magnific-popup.min.js"></script>
	<script src="/views/Booking/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="/views/Booking/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="/views/Booking/js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="/views/Booking/js/main.js"></script>

        
        
        
	</body>
</html>

