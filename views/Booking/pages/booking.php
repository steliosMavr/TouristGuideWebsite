<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Αρχική</title>
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
       
        
     
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Οί Κρατήσεις μου</h4>
      </div>
      <div class="modal-body" style="padding:10px;">
          
          
          
          <?php if(isset($_SESSION['hotelCardList'.$_SESSION['email']]) && count($_SESSION['hotelCardList'.$_SESSION['email']])>0):?>
          <h3 style="text-align:center;">Ξενοδοχεία</h3>
          <?php $vars=$_SESSION['hotelCardList'.$_SESSION['email']] ?>
         
          
        
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Ξενοδοχείο</th>
        <th scope="col">Από</th>
        <th scope="col">Εως</th>
        <th scope="col">Τελική Τιμή</th>
         <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
   
  
      
         <?php for($i = 0; $i<count($vars); $i++):?>
         <tr>
         <td class="rooms"><?php echo $vars[$i]['hotelname'] ?></td>
      <td class="rooms"><?php echo $vars[$i]['from'] ?></td>
             <td class="from"><?php echo $vars[$i]['until'] ?></td>
            
              <td class="price"><?php echo $vars[$i]['price']?></td>
              <td class="id" style="display:none;"><?php echo $vars[$i]['idhotel']?></td>
       <td><a href="#" class="booking">Ακύρωση</a></td>
     
    </tr>
    
      
        <?php endfor ?>
      
      
      
  </tbody>
</table>
            <?php endif ?>
          
          
          
        <?php if(isset($_SESSION['motoCardList'.$_SESSION['email']]) && count($_SESSION['motoCardList'.$_SESSION['email']])>0):?>
           <h3 style="text-align:center;">Μηχανές</h3>
          
          <?php $vars=$_SESSION['motoCardList'.$_SESSION['email']] ?>
                
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Διεύθηνση </th>
        <th scope="col">Τηλέφωνο</th>
        <th scope="col">Περιοχή</th>
        <th scope="col">Όνομα γραφείου</th>
         <th scope="col">Κυβικά</th>
        <th scope="col">Μοντέλο</th>
        <th scope="col">Τιμή</th>
         <th scope="col" style="display:none;"></th>
        <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
   
  
      
         <?php for($i = 0; $i<count($vars); $i++):?>
         <tr>
         <td><?php echo $vars[$i]['motosOfficeAddress'] ?></td>
      <td><?php echo $vars[$i]['motosOfficeTelephone'] ?></td>
             <td><?php echo $vars[$i]['motosOfficeLocation'] ?></td>
            
              <td><?php echo $vars[$i]['motosOfficeName']?></td>
              <td><?php echo $vars[$i]['motoskv']?></td>
              <td><?php echo $vars[$i]['MotoModel']?></td>
              <td ><?php echo $vars[$i]['MotoPrice']?></td>
             <td style="display:none;" class="idMotos"><?php echo $vars[$i]['idMotos']?></td>
             <td><a href="#" class="cancelMotosBooking">Ακύρωση</a></td>
     
    </tr>
    
      
        <?php endfor ?>
      
      
      
  </tbody>
</table>
          
          
          
          
          
          
          <?php endif ?>
          
          
          
              
          
        <?php if(isset($_SESSION['carCardList'.$_SESSION['email']]) && count($_SESSION['carCardList'.$_SESSION['email']])>0):?>
           <h3 style="text-align:center;">Οχήματα</h3>
          
          <?php $vars=$_SESSION['carCardList'.$_SESSION['email']] ?>
                
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Διεύθηνση </th>
        <th scope="col">Τηλέφωνο</th>
        <th scope="col">Περιοχή</th>
        <th scope="col">Όνομα γραφείου</th>
         <th scope="col">Κυβικά</th>
        <th scope="col">Μοντέλο</th>
        <th scope="col">Θέσεις</th>
        <th scope="col">Τιμή</th>
         <th scope="col" style="display:none;"></th>
        <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
   
  
      
         <?php for($i = 0; $i<count($vars); $i++):?>
         <tr>
         <td><?php echo $vars[$i]['carOfficeAddress'] ?></td>
      <td><?php echo $vars[$i]['carOfficeTelephone'] ?></td>
             <td><?php echo $vars[$i]['carOfficeLocation'] ?></td>
            
              <td><?php echo $vars[$i]['carOfficeName']?></td>
              <td><?php echo $vars[$i]['carKv']?></td>
              <td><?php echo $vars[$i]['carModel']?></td>
               <td ><?php echo $vars[$i]['carPassengerSits']?></td>
              <td ><?php echo $vars[$i]['carPrice']?></td>
             <td style="display:none;" class="idCar"><?php echo $vars[$i]['carId']?></td>
             <td><a href="#" class="cancelCarBooking">Ακύρωση</a></td>
     
    </tr>
    
      
        <?php endfor ?>
      
      
      
  </tbody>
</table>
          
          
          
          
          
          
          <?php endif ?>
          
          
          
          
          
          
          
          
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
      </div>
    </div>

  </div>
</div>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="/Booking">Tour Finder</a></div>
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
                                        <li><a href="#"  data-toggle="modal" data-target="#myModal">Οί Κρατήσης μου</a></li>
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
			   	<li style="background-image: url(views/Booking/images/go_travel.jpg);background-size:2000px 1000px;">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Καλως ηρθατε στο</h2>
				   					<h1>TOURFINDER</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(views/Booking/images/beach.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Βρειτε τον καταλληλο προορισμο</h2>
				   					<h1>Μονο με ενα click</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(views/Booking/images/travel.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
                                    <h2>Οργανωστε Τις Διακοπες σας</h2>
				   					<h1>Εύκολα και Γρήγορα</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(views/Booking/images/aeroplane.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<h2>Καντε κρατηση τωρα και κερδιστε</h2>
				   					<h1>Μοναδικα πακετα </h1>
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
				<div class="row">
					<div class="search-wrap">
						
						<div class="tab-content">
							
				        
						      <form class="colorlib-form" action="/booking/results" method="get">
				              	<div class="row">
				              	   <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Προορισμός</label>
				                    <div class="form-field">
				                     
				                      <input type="text" class="form-control " placeholder="Που θέλετε να πάτε" name="destination" required>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-sm-2">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date" name="checkin" required>
				                    </div>
				                  </div>
				                </div>
				                 <div class="col-sm-2">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date" name="checkout" required>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Ατομα</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control" style="color:grey;" required>
				                        <option value="1">1</option>
				                        <option value="2">2</option>
				                        <option value="3">3</option>
				                        <option value="4">4</option>
				                        <option value="5">5</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Αναζήτηση" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						  
						  
						  
			         </div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services" style="margin-top:50px;">
			<div class="container">
                
                <div class="row animate-box text-center ">
					
						<h2>Οι Υπηρεσίες Μας</h2>
						<p style="font-size:18px;">Μέσα Απο το Tour Finder μπορείται να οργανώσετε εύκολα και γρήγορα τις διακοπές σας μόνο με ένα click!! Βρείτε</p>
					
				</div>
                
               
				<div class="row no-gutters ">
                    
                    
                    
                    
                    <div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-resort"></i>
							</span>
							<h3 >Ξενοδοχεία</h3>
                            <br>
							<p>Βρείτε ξενοδοχεία σε προνομιακές τιμές εύκολα και γρήγορα μόνο με ένα <strong>Click !!</strong></p>
						</div>
					</div>
                   
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-plane"></i>
							</span>
							<h3>Αεροπορικά Εισiτήρια</h3>
							<p>Βρείτε αεροπορικά εισητήρια σε μοναδικές τιμές και ταξιδέψτε σε όλο τον κόσμο</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-boat"></i>
							</span>
							<h3>Ακτοπλοικά Εισiτήρια</h3>
							<p>Βρείτε ακτοπλοικά εισητήρια σε μοναδικές τιμές και ταξιδέψτε σε όλο τον κόσμο</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Ενοικιαστικά Γραφεία</h3>
							<p>Δεν έχετε μεταφορικό μέσο για τις διακοπές σας ? Κλείστε αμέσως όχημα μόνο με ένα <strong>Click !!</strong> </p>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Οι ποίο δημοφιλή  προορισμοί</h2>
						<p style="font-size:18px;">Παρακάτω μπορείτε να δείτε προορισμούς που προτειμήθηκαν απο εσάς</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a href="/booking/location/paris" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/paris.jpg);">
					</div>
					<span class="desc">
					
						<h2>Παρίσι, Γαλλία</h2>
						
						<span style="color:grey;">3 Καταλύματα</span>
					</span>
				</a>
			
                
                
                <a href="/booking/location/santorini" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/greece.jpg);">
					</div>
					<span class="desc">
					
						<h2>Σαντορίνη, Ελλάδα</h2>
						
						<span style="color:grey;">1 Καταλύμα</span>
					</span>
				</a>
			
                
                
                
                
				<a href="/booking/location/london" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/london.jpg);">
					</div>
					<span class="desc">
					
						<h2>Λονδίνο, Αγγλία</h2>
						
						<span style="color:grey;">2 Καταλύματα</span>
					</span>
				</a>
			
                
			<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/amsterdam.jpg);">
					</div>
					<span class="desc">
					
						<h2>Άμστερνταμ, Ολλανδία</h2>
						
						<span style="color:grey;">3 Καταλύματα</span>
					</span>
				</a>
                
                
                
                
			<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/rome.jpg);">
					</div>
					<span class="desc">
					
						<h2>Κολοσσαίο, Ρόμη</h2>
						
					<span style="color:grey;">3 Καταλύματα</span>
					</span>
				</a>
                
                
                
			<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/spain.jpg);">
					</div>
					<span class="desc">
					
						<h2>Μπαρτσελόνα, Ισπανία</h2>
						
						<span style="color:grey;">3 Καταλύματα</span>
					</span>
				</a>
                
                	<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/york.jpg);">
					</div>
					<span class="desc">
					
						<h2>Νέα Υόρκη</h2>
						
						<span style="color:grey;">3 Καταλύματα</span>
					</span>
				</a>
                
                
           <a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(views/Booking/images/china.jpg);">
					</div>
					<span class="desc">
					
						<h2>Κίνα</h2>
						
						<span style="color:grey;">3 Καταλύματα</span>
					</span>
				</a>
			</div>
		</div>


		

	
		<div id="colorlib-hotel">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Προτεινόμενα Ξενοδοχεία</h2>
						<p style="font-size:18px;">Παρακάτω μπορείτε να βρείτε μερικά απο τα καλύτερα ξενοδοχεία μας</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="/booking/specifichotel/id/7" class="hotel-img" style="background-image: url(views/Booking/hotel_imgs/hotel7/ka.jpg);">
									
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Grand Royale</a></h3>
										<span class="place">London,England</span>
										<p>Ένα απο τα καλύτερα ξενοδοχεία στο λονδίνο</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="/booking/specifichotel/id/1" class="hotel-img" style="background-image: url(views/Booking/hotel_imgs/hotel1/photo.jpg);">
									
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Motel One Paris</a></h3>
										<span class="place">Παρίση</span>
										<p>Ένα απο τα καλύτερα ξενοδοχεία στο Παρίση</p>
									</div>
								</div>
							</div>
						<div class="item">
								<div class="hotel-entry">
									<a href="/booking/specifichotel/id/2" class="hotel-img" style="background-image: url(views/Booking/hotel_imgs/hotel2/photo2.jpg);">
									
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Hyatt Regency Paris Etoile</a></h3>
										<span class="place">Παρίση</span>
										<p>Ένα απο τα καλύτερα ξενοδοχεία στο Παρίση</p>
									</div>
								</div>
							</div>
						<div class="item">
								<div class="hotel-entry">
									<a href="/booking/specifichotel/id/5" class="hotel-img" style="background-image: url(views/Booking/hotel_imgs/hotel7/ka.jpg);">
									
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										<h3><a href="#">Central Park Hotel </a></h3>
										<span class="place">London,England</span>
										<p>Ένα απο τα καλύτερα ξενοδοχεία στο λονδίνο</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Χώρες και πόλεις για να ταξιδέψετε </h2>
						<p style="font-size:18px;">Παρακάτω δείτε κάποιες απο τις ομορφότερες πόλεις στην ιταλία για να ταξιδέψετε </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="/booking/location/rome" class="f-tour-img" style="background-image: url(views/Booking/images/rome1.jpg);">
												<div class="desc">
													<h3>Ρωμη</h3>
													
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="#" class="f-tour-img" style="background-image: url(views/Booking/images/milano.jpg);">
												<div class="desc">
													<h3>Μιλανο</h3>
													
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="#" class="f-tour-img" style="background-image: url(views/Booking/images/verona.jpg);">
												<div class="desc">
													<h3>Βερονα</h3>
													
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="#" class="f-tour-img" style="background-image: url(views/Booking/images/sanmarino.jpg);">
												<div class="desc">
													<h3>san-marino</h3>
													
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Ιταλια, Ευρωπη</h3>
												<p>Η Ιταλία (ιταλικά: Italia), επισήμως η Ιταλική Δημοκρατία (Repubblica Italiana)[4], είναι κυρίαρχο κράτος στην Ευρώπη. Αποτελείται από μία χερσόνησο σε σχήμα μπότας και δύο μεγάλα νησιά στη Μεσόγειο θάλασσα: τη Σικελία και τη Σαρδηνία. Βόρεια συνορεύει με την Ελβετία και την Αυστρία, δυτικά με τη Γαλλία και ανατολικά με τη Σλοβενία, ενώ εξκλάβιο της Ιταλίας αποτελεί και η πόλη Καμπιόνε ντ' Ιτάλια, που βρίσκεται στο έδαφος της Ελβετίας. Οι ανεξάρτητες χώρες του Σαν Μαρίνο και του Βατικανού βρίσκονται εξ ολοκλήρου μέσα σε ιταλικό έδαφος.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Δυμοφηλες Πόλης</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Ρώμη</a></li>
															<li><a href="#">Μιλάνο</a></li>
															<li><a href="#">Βέρονα</a></li>
															<li><a href="#">San Marino</a></li>
														</ul>
													</div>
													
												</div>
												
											</div>
										</div>
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
						<h2>Εγγραφή</h2>
						<p>Αν θέλετε και εσείς να λαμβάνετε πληροφορίες για καινούργιους προορισμούς και εκδρομές μη διστάσετε να γραφτείτε </p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Εισαγωγή Email">
										<button type="submit" class="btn btn-primary">Εγγραφή</button>
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
        $(".booking").click(function(e){
       
                   
            $.post("/booking/cancelBooking",
    {
        id: $(this).closest("td").prev().text()
      
    },
    function(data, status){
      
              
                
                alert(data);
              
                   window.location.replace("/Booking");
                   
              
                
                
                
    });
            
         
     
            
            
            
        });
     
     
     
     $(".cancelMotosBooking").click(function(e){
         
                  $.post("/booking/cancelMotosBooking",
    {
        motosId: $(this).closest("td").prev().text()
      
    },
    function(data, status){
      
              
                
                alert(data);
              
                   window.location.replace("/Booking");
                   
              
                
                
                
    });
         
         
       
     });
     
     
     
     
     
     $(".cancelCarBooking").click(function(e){
         
           
                  $.post("/booking/cancelCarBooking",
    {
        carId: $(this).closest("td").prev().text()
      
    },
    function(data, status){
      
              
                
                alert(data);
              
                   window.location.replace("/Booking");
                   
              
                
                
                
    });
         
        
         
         
     })
        
        
        </script>
        
        


	</body>
</html>

