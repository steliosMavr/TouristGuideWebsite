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
                                        
                                  
                                      
                                         <?php if(count($this->vars['officeInfo'])!=0): ?>
                                        <h2> Βρέθηκαν  <?php echo count($this->vars['officeInfo'])?> Γραφεία</h2>
                                        <?php endif ?>
                        
                                 <?php if(count($this->vars['officeInfo'])==0): ?>
                                        <h2> Δεν Βρέθηκαν Γραφεία</h2>
                                        <?php endif ?>
                        
                        
                        
                        
										
									</div>
                    
                                    
                    
                    
                  
					</div>
                    
                    
                    
                    
                    
					<div class="col-md-12">
						<div class="row">
                            
                          
                             <div class="col-md-3">
                                 
                                        
                                  
                            <div class="sidebar-wrap">
							     
                            <div class="sidebar-wrap">
						<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Αλλαγή Αναζήτησης</h3>
							<form method="GET" class="colorlib-form" action="/booking/toursFinder">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Προορισμός:</label>
				                    <div class="form-field">
				                     
				                      <input type="text"  name="destination" class="form-control" placeholder="Όνομα...">
				                    </div>
				                  </div>
				                </div>
                                    
                                     
				             
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Βρείτε Εκδρομή" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
                                 </div>
                                 </div>
                            
                            
                            </div>
                            
                            
                            		<div class="col-md-9" style="margin-top:10px;">
								<div class="wrap-division">
                                    
                                    
									 <?php for($i = 0; $i<count($this->vars['tours']); $i++):?>
                                    
                                   
                                    <div class="row animate-box" style="border:1px solid grey;padding:10px;margin-top:10px;">
                                    
                                    <div class="col-md-4">
                                        <div class="row">
                                            
                                          
                                            <div class="room-img" style="background-image:url(/views/Booking/images/tour.jpeg);width:220px;height:260px;" ></div>
                                           
                                        </div>
                                      
                                        </div>
                                        
                                        <div class="col-md-8">
                                           
                                            
                                            <div class="row">
                                            
                                                  <div class="col-md-4 officeInfo" style="margin-top:30px;">
                                                <h5>Πληροφορίες Γραφείου</h5>
                                                      
                                                       <?php for($j = 0; $j<count($this->vars['officeInfo']); $j++):?>
                                                      
                                                      
                                                   <?php if($this->vars['tours'][$i]['officeId']==$this->vars['officeInfo'][$j]['idtours_offices']): ?>
                                        
                                                       <p style="margin:0px;padding:5px;">Όνομα Γραφείου:<?php echo $this->vars['officeInfo'][$j]["name"]?></p>
                                                     <p style="margin:0px;padding:5px;">Πόλη:<?php echo $this->vars['officeInfo'][$j]["location"]?></p>
                                                     <p style="margin:0px;padding:5px;">Τηλέφωνο:<?php echo $this->vars['officeInfo'][$j]["telephone"]?></p>
                                                     <p style="margin:0px;padding:5px;">Διέυθηνση:<?php echo $this->vars['officeInfo'][$j]["address"]?></p>
                                                      
                                                      <?php  break; ?>
                                                      <?php endif ?>
                                                     
                                                      
                                                      
                                                      <?php endfor ?>
                                                     
                                                     
                                               </div>
                                                
                                                        <div class="col-md-8 officeInfo" style="margin-top:30px;border-left:1px solid black;padding-left:30px;">
                                                <h5>Πληροφορίες Εκδρομής</h5>
                                                     <p style="margin:0px;padding:5px;">Αφαιτηρία:<?php echo $this->vars['tours'][$i]["start"]?></p>
                                                     <p style="margin:0px;padding:5px;">Ημμερ.Αναχώρησης:<?php echo explode("T",$this->vars['tours'][$i]["departure_date"])[0]?></p>
                                                     <p style="margin:0px;padding:5px;">Ωρα.Αναχώρησης:<?php echo explode("T",$this->vars['tours'][$i]["departure_date"])[1]?></p>
                                                     <p style="margin:0px;padding:5px;">Ημμερ.Επιστροφής:<?php echo explode("T",$this->vars['tours'][$i]["back_date"])[0]?> </p>
                                                    <p style="margin:0px;padding:5px;">Ωρα.Επιστροφής:<?php echo explode("T",$this->vars['tours'][$i]["back_date"])[1]?> </p>
                                                    <p style="margin:0px;padding:5px;">Τιμή:<?php echo $this->vars['tours'][$i]["price"]?> € </p>
                                                    
                                               
                                                
                                              
                                            </div>
                                               
                                        
                                            
                                        
                                        </div>
                                        
                                    
                                      
                                        
                                        
                                        
                                    </div>
                                     <?php endfor ?>
                                   
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

        
        
        <script>
            
            
         
            
    
        </script>

        
	</body>
</html>

