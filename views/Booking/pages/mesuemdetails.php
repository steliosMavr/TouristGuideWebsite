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
                    
                 
                       		<!-- SIDEBAR-->
				  <div class="col-md-3">
                                 
                            <div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Αλλαγή Αναζήτησης</h3>
								<form method="get" class="colorlib-form" action="/booking/musuemname">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Όνομα Μουσείου:</label>
				                    <div class="form-field">
				                     
				                      <input type="text"  name="n" class="form-control" placeholder="Όνομα...">
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
                            
                            
                     <?php if($this->vars==null): ?>
                       <div class="col-md-9" id="slider" style="margin-top:20px;">
                    <h3 style="margin:0px;display:inline;"><a href="#" style="color:black;">Δέν βρέθηκαν αποτελέσματα</a></h3>
                    </div>
                    <?php endif ?>
                    
                  
                    <?php if($this->vars!=null): ?>
                  <div class="col-md-9" id="slider" style="margin-top:20px;">
                     <h3 style="margin:0px;display:inline;"><a href="#" style="color:black;"><?php echo $this->vars['name']; ?></a></h3>
                     
                        <p style="margin:0px;"><a href="#" style="color:black;"><?php echo $this->vars['address']; ?></a></p>
                         <p style="margin:0px;"><a href="#" style="color:black;"><?php echo $this->vars['telephone']; ?></a></p>
                     
                      
                      
                    
                    </div>
					
                    
          
          
                <div class="col-md-9" id="slider" style="margin-top:20px;">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                   
                                        <?php if(count($this->vars['final_path'])>=2): ?>
                                         
                                    <div class="active item" data-slide-number="<?php echo $i?>">
                                          <img src="<?php echo $this->vars['final_path'][0] ?>" style="height:500px;"></div>
                                    
                                       <?php for($i = 1; $i<count($this->vars['final_path']); $i++):?>
                                    
                                       <div class="item" data-slide-number="<?php echo $i?>">
                                          <img src="<?php echo $this->vars['final_path'][$i] ?>" style="height:500px;"></div>
                                    
                                       <?php endfor ?>
                                    
                                    
                                        <?php endif ?>
                                    
                                    <?php if(count($this->vars['final_path'])==1): ?>
                                     <div class="active item" data-slide-number="<?php echo $i?>">
                                          <img src="<?php echo $this->vars['final_path'][0] ?>" style="height:500px;"></div>
                               
                                        <?php endif ?>
                                 
                                    

                                

                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    
                     <ul class="hide-bullets">
                         
                          <?php if(count($this->vars['final_path'])>=2): ?>
                           <?php for($i = 0; $i<count($this->vars['final_path']); $i++):?>
                           <li class="col-xs-2">
                        <a class="thumbnail" id="carousel-selector-<?php echo $i?>">
                            <img src="<?php echo $this->vars['final_path'][$i] ?>" style="height:120px;">
                        </a>
                    </li>
                         
                         
                         <?php endfor ?>
                         
                         
                          <?php endif ?>
                         
                          <?php if(count($this->vars['final_path'])==1): ?>
                          <li class="col-xs-2">
                        <a class="thumbnail" id="carousel-selector-<?php echo $i?>">
                            <img src="<?php echo $this->vars['final_path'][0] ?>">
                        </a>
                  

                   <?php endif ?>
                   
                    
                         


                 
                </ul>
                        
                    </div>
                    
                 
                    <div style="border-top:1px solid grey;"></div>
                        
                    <div class="col-md-12">
                    
                   <p style="margin-top:15px;"><em>
                        
                        <?php  echo $this->vars['description']?>
                       </em> </p>
                        
                        
                    </div>
                
                   
                    
                   
                    
                    
                    
                    
                </div>
                    
                                                                    <?php endif ?>
                    
                    
                     
                  
                    
                    
                   
                  
           
                
                 
					
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
        
        <script>  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});</script>
        
        
        
        

	</body>
</html>

