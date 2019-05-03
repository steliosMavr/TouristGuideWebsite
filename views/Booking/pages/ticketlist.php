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
		<nav class="colorlib-nav" role="navigation" style="background-color:#0b6491;">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="/Booking">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="#">Αρχική</a></li>
								<li><a href="/booking/activity">Δραστηριότητες</a></li>
								<li><a href="/booking/rent">Ενοικιαστηκά Γραφεία</a></li>
                                <li><a href="/booking/tours">Εκδρομηκά Γραφεία</a></li>
								<li><a href="/booking/tickets">Εισητήρια</a></li>
                                
                                 <?php  if(isset($_SESSION['email'])): ?>
                                	<li class="has-dropdown">
									<a href="#"><?php echo $_SESSION['email'] ?> </a>
									<ul class="dropdown">
                                        <li><a href="/booking/myBooks">Οί Κρατήσης μου</a></li>
										<li><a href="/booking/logout">Αποσύνδεση</a></li>
										
									</ul>
								</li>
                                
                                 <?php endif ?>
                                 <?php  if(!isset($_SESSION['email'])): ?>
								<li><a  href="/booking/registeruser">Σύνδεση</a></li>
                                 <?php endif ?>
								
                               
                               
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
        
		

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
                  <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                                        
                                  
                                      
                                         <?php if(count($this->vars)!=0): ?>
                                        <h2> Βρέθηκαν  <?php echo count($this->vars)?> Γραφεία</h2>
                                        <?php endif ?>
                        
                                 <?php if(count($this->vars)==0): ?>
                                        <h2> Δεν Βρέθηκαν Γραφεία</h2>
                                        <?php endif ?>
                        
                        
                        
                        
										
									</div>
                    
                    
                    
                  
					</div>
                    
                    
                    
                    
                    
					<div class="col-md-12">
                        
                        
                        
						<div class="row">
                            
                             
                <?php for($i=0; $i<count($this->vars); $i++):?>
                
                <?php if($this->vars[0]['ticketType']=="aeroplane"): ?>
                
               
               
                   
                    <div class="row">
                        
                        <div class="col-md-2 bg-primary text-center" style="padding:22px;">
                         
                            <div class="company_info">
                             
                                <p style="padding:0px;margin:0px;font-size:20px">Αναχώρηση:</p>
                                <p style="padding:0px;margin:0px;font-size:20px;"><?php echo explode(" ",$this->vars[$i]['departure_date_time'])[0]; ?></p>
                            
                            </div>
                          
                        
                        
                        </div>
                        
                        
                          <div class="col-md-8 bg-success text-center"  style="padding:22px;">
                         
                              <div class="row">
                              
                                    <div class="col-md-4">
                                  
                                      <div class="flight_info">
                              
                               <p style="padding:0px;margin:0px;font-size:20px;"><?php echo explode(" ",$this->vars[$i]['departure_date_time'])[1]; ?></p>
                                <p style="padding:0px;margin:0px;font-size:20px;"><?php echo $this->vars[$i]['departureFrom']?></p>
                                
                              </div>
                           
                                  </div>
                                  
                                  
                                  
                                  
                                    <div class="col-md-4">
                                  
                                     <i class="fas fa-long-arrow-alt-right" style="font-size:60px;"></i>
                           
                                  </div>
                                  
                                  
                                  
                                  
                                  
                                  <div class="col-md-4">
                                  
                                  
                                      <div class="flight_info">
                              
                               <p style="padding:0px;margin:0px;font-size:20px;"><?php echo explode(" ",$this->vars[$i]['destination_date_time'])[1]; ?></p>
                                <p style="padding:0px;margin:0px;font-size:20px;"><?php echo $this->vars[$i]['destination']?></p>
                                
                              </div>
                                  
                                  </div>
                              
                              </div>
                            
                        
                        
                        </div>
                        
                        
                        
                        
                        
                          
                        <div class="col-md-2 bg-primary" style="padding:22px;">
                         
                            
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid black;">  
                            <div class="company_info">
                             
                                <p style="padding:0px;margin:0px;font-size:20px;">Τιμή:</p>
                               
                                    <p style="padding:0px;margin:0px;font-size:20px;"><?php echo $this->vars[$i]['ticketPrice']?>€</p>
                            </div>
                          </div>
                                
                                
                                 <div class="col-md-6">
                                    
                                     <div class="book" style="margin-top:20px;">
                                     <a href="#" style="font-size:18px;">Κράτηση</a>
                                     </div>
                                     
                                
                                </div>
                            
                            </div>
                          
                        
                        
                        </div>
                        
                          
                       
                            
                                
                        
                
                </div>
                 <?php endif ?>
                
                
                
                
                  <?php if($this->vars[0]['ticketType']=="ships"): ?>
                
                
                
                
                            
                    <div class="row">
                        
                        <div class="col-md-2 bg-primary text-center" style="padding:22px;">
                         
                            <div class="company_info">
                             
                                <p style="padding:0px;margin:0px;font-size:20px">Αναχώρηση:</p>
                                <p style="padding:0px;margin:0px;font-size:20px;"><?php echo explode(" ",$this->vars[$i]['departure_date_time'])[0]; ?></p>
                            
                            </div>
                          
                        
                        
                        </div>
                        
                        
                          <div class="col-md-8 bg-success text-center"  style="padding:22px;">
                         
                              <div class="row">
                              
                                    <div class="col-md-4">
                                  
                                      <div class="flight_info">
                              
                               <p style="padding:0px;margin:0px;font-size:20px;"><?php echo explode(" ",$this->vars[$i]['departure_date_time'])[1]; ?></p>
                                <p style="padding:0px;margin:0px;font-size:20px;"><?php echo $this->vars[$i]['departureFrom']?></p>
                                
                              </div>
                           
                                  </div>
                                  
                                  
                                  
                                  
                                    <div class="col-md-4">
                                  
                                     <i class="fas fa-long-arrow-alt-right" style="font-size:60px;"></i>
                           
                                  </div>
                                  
                                  
                                  
                                  
                                  
                                  <div class="col-md-4">
                                  
                                  
                                      <div class="flight_info" style="margin-top:11px;">
                              
                                
                                <p style="padding:0px;margin:0px;font-size:20px;"><?php echo $this->vars[$i]['destination']?></p>
                                
                              </div>
                                  
                                  </div>
                              
                              </div>
                            
                        
                        
                        </div>
                        
                        
                        
                        
                        
                          
                        <div class="col-md-2 bg-primary" style="padding:22px;">
                         
                            
                            <div class="row">
                                <div class="col-md-6" style="border-right:1px solid black;">  
                            <div class="company_info">
                             
                                <p style="padding:0px;margin:0px;font-size:20px;">Τιμή:</p>
                               
                                    <p style="padding:0px;margin:0px;font-size:20px;"><?php echo $this->vars[$i]['ticketPrice']?>€</p>
                            </div>
                          </div>
                                
                                
                                 <div class="col-md-6">
                                    
                                     <div class="book" style="margin-top:20px;">
                                     <a href="#" style="font-size:18px;">Κράτηση</a>
                                     </div>
                                     
                                
                                </div>
                            
                            </div>
                          
                        
                        
                        </div>
                        
                          
                       
                            
                                
                        
                
                </div>
                
                
                
                 <?php endif ?>
                
                 <?php endfor ?>
                
                
                            
                             
                            
							
                            
                            
                            
                            
                            
                            
                            
                            
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

        
        
        <script>
            
            
         
            
    
        </script>

        
	</body>
</html>

