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
                                        
                                  
                                      
                                         <?php if($this->vars!=null): ?>
                                        <h2> <?php echo $this->vars[0]["location"] ?>  Πόλη:Βρέθηκαν  <?php echo count($this->vars)?> Μουσεία</h2>
                                        <?php endif ?>
                        
                                 <?php if($this->vars==null): ?>
                                        <h2> Δεν Βρέθηκαν Μουσεία</h2>
                                        <?php endif ?>
                        
                        
                        
                        
										
									</div>
                    
                                    
                    
                    
                  
					</div>
                    
                    
                    
                    
                    
					<div class="col-md-12">
						<div class="row">
                            
                          
                             <div class="col-md-3">
                                 
                            <div class="sidebar-wrap">
						<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Αλλαγή Αναζήτησης</h3>
							<form method="GET" class="colorlib-form" action="/booking/mesuems">
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
				                  <input type="submit" name="submit" id="submit" value="Βρείτε Μουσείο" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
                                 </div>
                            
                            
                            </div>
                            
                            
                            
                            
							<div class="col-md-9">
								<div class="wrap-division">
									
                                    
                                    
									<div class="row">
                                        
                                                  
                              
                                         
                                         
                                                <?php if($this->vars!=null): ?>
                                                  
                                        
                                      <?php for($i = 0; $i<count($this->vars); $i++):?>
                                                
                                                
                                         
                                        <div class="col-md-12 animate-box hotelcontainer" style="border:1px solid grey;">
											<div class="room-wrap">
												<div class="row" >
													<div class="col-md-6 col-sm-6" style="margin:0;padding:5px;">
													<div class="room-img" style="background-image:url(   <?php echo $this->vars[$i]['final_path'][0] ?>);" ></div>
													</div>
													<div class="col-md-6 col-sm-6">
                                                        
                                                        
                                                              
                                                        
                                                        
														<div class="desc">
                                                            
                                                            
                                                            

                                                            
                                                             
                                                            
                                                             <h2 style="margin:0px;"><a href="#" onclick="sendForm(<?php echo $this->vars[$i]["idmesuem"]?>)" ><?php echo $this->vars[$i]["name"]?></a></h2>
                                                              <form class="colorlib-form" class="userinfo" action="/booking/showMesuem" method="get" style="display:none;">
                                                                   
                                                                    <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" name="idmesuem" class="form-control date" placeholder="Check-out date" value=<?php echo $this->vars[$i]["idmesuem"]?> >
				                    </div>
				                  </div>
				                </div>
                                                                  </div>
                                                            </form>
                                                            
                                                            
                                                            
                                                              <p style="margin-top:5px;"><a href="#">Διεύθυνση:<?php echo $this->vars[$i]["address"]?></a></p>
                                                              <p style="margin-top:5px;"><a href="#">Τηλέφωνο:<?php echo $this->vars[$i]["telephone"]?></a></p>  
                                                              <p style="margin-top:5px;"><a href="#">Τιμή:<?php echo $this->vars[$i]["price"]?>€</a></p>  
                                                              <p style="margin-top:5px;"> <?php echo $this->vars[$i]["description"] ?></p>
                                                                 
                                                            
                                                                 
                                                               
                                                            
                                                          
														</div>
                                                        
                                                       
													</div>
    
												</div>
											</div>
										</div>
                                          <?php endfor ?>
                                                
                                                   <?php endif ?>
                                            
                                                
                                              
                                        
                                       
                                        
                                       

										
									


										

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

        
        
        <script>
            
            
            function sendForm(id){
               forms =$('.desc').find("form");
           
            for(i=0; i<forms.length; i++){
                
                if(forms[i].elements["idmesuem"].value==id){
                    HTMLFormElement.prototype.submit.call($('.desc').find("form")[i]);
                }
               
            }
        }
            
    
        </script>

        
	</body>
</html>

