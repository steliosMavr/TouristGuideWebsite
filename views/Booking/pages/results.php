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
                                        <h2>  Βρέθηκαν  <?php echo count($this->vars)?> Καταλύματα</h2>
                                        <?php endif ?>
                        
                                 <?php if($this->vars==null): ?>
                                        <h2> Δεν Βρέθηκαν Καταλύματα</h2>
                                        <?php endif ?>
                        
                        
                        
                        
										
									</div>
                    
                                    
                    
                    
                  
					</div>
                    
                    
                    
                    
                    
					<div class="col-md-12">
						<div class="row">
                            
                          
                             <div class="col-md-3">
                                 
                            		<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Αλλάξτε την αναζήτηση σας</h3>
								 <form class="colorlib-form" action="/booking/results" method="get">
				              	<div class="row">
                                    <div class="col-md-12" style="display:none;">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                      <div class="form-field">
				                     
				                      <input type="text" class="form-control " placeholder="Που θέλετε να πάτε" name="destination" value=<?php echo $this->vars[0]['location']; ?> required>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date" name="checkin">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date" name="checkout">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Επισκέπτες</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control" name="people">
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5">5</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Ανανέωση" class="btn btn-primary btn-block">
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
                                                            
                                                            
                                                            

                                                            
                                                             
                                                            
                                                             <h2 style="margin:0px;"><a href="#" onclick="sendForm(<?php echo $this->vars[$i]["idhotels"]?>)" ><?php echo $this->vars[$i]["hotelname"]?></a></h2>
                                                            	  <form class="colorlib-form" class="userinfo" action="/booking/showhotel" method="get" style="display:none;">
                                                                   
                                                                    <div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" name="checkout" class="form-control date" placeholder="Check-out date" value=<?php echo $this->vars[$i]["checkOut"]?> >
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                   
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" name="checkin" class="form-control date" placeholder="Check-out date" value=<?php echo $this->vars[$i]["checkIn"]?> >
				                    </div>
				                  </div>
				                </div>
                                                                          <div class="col-md-12">
				                  <div class="form-group">
				                   
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" name="idhotels"  class="form-control date" placeholder="Check-out date" value=<?php echo $this->vars[$i]["idhotels"]?> >
				                    </div>
				                  </div>
				                </div>
				              
				              
                                                                          <div class="col-md-12">
				                  <div class="form-group">
				                   
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" name="people" class="form-control date" placeholder="Check-out date" value=<?php echo $this->vars[$i]["people"]?> >
				                    </div>
				                  </div>
				                </div>
				                
				              </div>
				            </form>
                                                      

                                                               
                                                            
														      
                                                            
                                                            <?php echo " <p class=star style=color:#c6a900;><span>"?>
                                                            
                                                                <?php for($star = 0; $star<$this->vars[$i]['category']; $star++):?>
                                                                <?php echo "<i class=icon-star-full></i>" ?>
                                                            
                                                            <?php endfor ?>
                                                            
                                                            <?php echo "</span></p>"?>
                                                            
                                                  

                                                            <p style="text-decoration:underline"><a>πόλη <?php echo $this->vars[$i]['location'] ?> - <?php echo $this->vars[$i]['address'] ?></a></p>
                                                            <p ><a>Επικοινωνία:<?php echo $this->vars[$i]['telephone'] ?></a></p>
                                                           
                                                            
                                                            
                                                           
                                                                 
                                                                 <?php if(isset($this->vars[$i]['rooms']['found']) && $this->vars[$i]['rooms']['found']!=null): ?>
                                                                    <div class="alert alert-success" role="alert">
                                                                            <strong>Βρέθηκαν Διαθέσιμα:</strong> 
                                                                    
                                                                   <?php for($room = 0; $room<count($this->vars[$i]['rooms']['found']); $room++):?>
                                                              <?php echo $this->vars[$i]["rooms"]['found'][$room] ?>
                                                                
                                                                   <?php endfor ?>
                                                                        
                                                                  </div>
                                                                 
                                                                 
                                                                 
                                                                   <?php endif ?>
                                                                 
                                                                 
                                                                 
                                                                 <?php if(!isset($this->vars[$i]['rooms']['found'])): ?>
                                                                    <?php echo $this->vars[$i]["description"] ?>
                                                                 
                                                                 <?php endif ?>
                                                            
                                                            
                                                                 <?php if(isset($this->vars[$i]['rooms']['found']) && count($this->vars[$i]['rooms']['found'])==0): ?>
                                                                 <div class="alert alert-danger" role="alert">
                                                                        Δέν Βρέθηκαν Διαθέσιμα Δωμάτια αυτή την στιγμή
                                                                    </div>
                                                                 
                                                                 <?php endif ?>
                                                            
                                                                 
                                                               
                                                            
                                                          
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
                if(forms[i].elements["idhotels"].value==id){
                    HTMLFormElement.prototype.submit.call($('.desc').find("form")[i]);
                }
               
            }
        }
            
    
        </script>

        
	</body>
</html>

