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
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(https://images.pexels.com/photos/672358/pexels-photo-672358.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>επισκεφτητε</h2>
				   					<h1 style="font-size:40px;">Μουσεία & Αξιοθέατα</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   
			 
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row ">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#mesuem">Μουσεία</a></li>
								<li><a data-toggle="tab" href="#landmark">Αξιοθέατα</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div id="mesuem" class="tab-pane fade in active">
								<form method="GET" class="colorlib-form" action="/booking/mesuems">
				              	<div class="row ">
                                     <div class="col-md-4">
				              	 	
				              	 </div>
				               
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Προορισμός:</label>
				                    <div class="form-field">
				                      <input type="text" name="destination" class="form-control" placeholder="Προορισμός">
				                    </div>
				                  </div>
				              	 </div>
				               
				          
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Βρείτε Μουσεία" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
				         </div>
				         <div id="landmark" class="tab-pane fade">
						      <form method="GET" action="/booking/landmarks" class="colorlib-form">
				              	<div class="row">
                                    	<div class="row ">
                                     <div class="col-md-4">
				              	 	
				              	 </div>
				               
				             	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Προορισμός:</label>
				                    <div class="form-field">
				                      <input type="text" name="destination" id="location" class="form-control" placeholder="Προορισμός">
				                    </div>
				                  </div>
				              	 </div>
				               
				            
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Βρείτε Αξιοθέατα" class="btn btn-primary btn-block">
				                </div>
				              </div>
                                  </div>
				            </form>
						   </div>
						  
						 
			         </div>
					</div>
				</div>
			</div>
            
		</div>
        
        
        
		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2 style="font-size:27px;">Τα ποίο δημοφιλή  Μουσεία Ανα τον Κόσμο</h2>
						
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a href="/booking/showmuseum/id/1" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/victoria_albert.jpg);">
					</div>
					<span class="desc">
					     <h2>Victoria AND ALBERT MESUEM</h2>
						 <p style="color:grey;">Λονδίνο, Αγγλία</p>
						
						
					</span>
				</a>
			
                
                
                <a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/palace-museum-taiwan.png);">
					</div>
					<span class="desc">
					
						 <h2>NATIONAL PALACE MUSEUM</h2>
						 <p style="color:grey;">Ταιβάν</p>
					</span>
				</a>
			
                
                
                
                
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/shangai-science.png);">
					</div>
					<span class="desc">
					
						<h2>SCIENCE AND TECHNOLOGY MUSEUM</h2>
							 <p style="color:grey;">SHANGHAI</p>
						
					</span>
				</a>
			
                
			<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/met-ny.png);">
					</div>
					<span class="desc">
					
						<h2>METROPOLITAN MUSEUM OF ART </h2>
						
						 <p style="color:grey;">Νέα Υόρκη</p>
					</span>
				</a>
                
                
                
                
			<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/air-and-space-dc.png);">
					</div>
					<span class="desc">
					
						<h2>NATIONAL AIR AND SPACE MUSEUM</h2>
						
						 <p style="color:grey;">Oυάσινγκτον</p>
					</span>
				</a>
                
                
                
			<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/natural-history-dc.png);">
					</div>
					<span class="desc">
					
						<h2> NATIONAL MUSEUM OF NATURAL HISTORY</h2>
						
						 <p style="color:grey;">Oυάσινγκτον</p>
					</span>
				</a>
                
                	<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/national-museum-beijing.png);">
					</div>
					<span class="desc">
					
						<h2>THE NATIONAL MUSEUM OF CHINA</h2>
						 <p style="color:grey;">Πεκίνο</p>
						
					</span>
				</a>
                
                
           <a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(/views/Booking/images/louvre-paris.png);">
					</div>
					<span class="desc">
					
						<h2>THE LOUVRE</h2>
						 <p style="color:grey;">Παρίσι</p>
						
					</span>
				</a>
			</div>
		</div>
        
        
        
        
        
	
		<div id="colorlib-hotel">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Προτεινόμενα Αξιοθέατα</h2>
						<p>Παρακάτω μπορείτε να βρείτε κάποια απο τα ποίο εντυπωσιακά αξιοθέατα για τις διακοπές σας.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="/booking/showlandmark/id/1" class="hotel-img" style="background-image: url(/views/Booking/images/elafonissi.jpg);">
										
									</a>
									<div class="desc">
										<h3><a href="#">Elafonissi Beach</a></h3>
										<span class="place">Χανία,Ελλάδα</span>
										<p>Μία απο τις καλύτερες παραλίες του κόσμου λίγο έξω απο τα χανία</p>
									</div>
								</div>
							</div>
                          
                            
                            
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(/views/Booking/images/london-thumb-large.jpg);">
										
									</a>
									<div class="desc">
										<h3><a href="#">Το Μάτι του Λονδίνου</a></h3>
										<span class="place">Λονδίνο,Αγγλία</span>
										<p>Το Μάτι του Λονδίνου είναι μια γιγαντιαία ρόδα-τροχός στη νότια όχθη του ποταμού Τάμεση στο Λονδίνο</p>
									</div>
								</div>
							</div>
                            <div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(/views/Booking/images/kolossaio.jpg);">
										
									</a>
									<div class="desc">
										<h3><a href="#">Κολοσσαίο</a></h3>
										<span class="place">Ρώμη,Ιταλία</span>
										<p>Το Amphitheatrum Flavium ή περισσότερο γνωστό με την ονομασία Colosseum, ήταν ένα αμφιθέατρο στην Ρώμη. Βρίσκεται στη ΝΑ. πλευρά της Ρωμαϊκής Αγοράς</p>
									</div>
							</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="hotels.html" class="hotel-img" style="background-image: url(/views/Booking/images/liberty.png);">
										
									</a>
									<div class="desc">
										<h3><a href="#">Το Άγαλμα της Ελευθερίας</a></h3>
										<span class="place">Νέα Υόρκη</span>
										<p>Το άγαλμα της Ελευθερίας είναι μεγάλου μεγέθους γλυπτό, το οποίο εικονίζει την Ελευθερία ως γυναικεία μορφή</p>
									</div>
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

