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

        
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">   
        
        
	
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

        
        
         <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Προεπισκόπιση Δωματίου - Περιέχει <span id="contain"></span></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
            
            <div class="container">
            <div class="row">
            <div class="col-md-4">
                
                     <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="roomCarousel">
                                <!-- Carousel items -->
                                
                                <ol class="carousel-indicators"></ol>
                                <div class="carousel-inner">
                                   
                                      

                                

                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#roomCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#roomCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
                
                
                
                
                
            <div class="col-md-2 text-left">
                
                 <p style="font-weight: bold;">Μέγεθoς Δωματίου:<span id="roomSize"></span>τ.μ</p>
                
                <p id="description"></p>
                
                <p style="font-weight: bold;padding:0px;margin:0px;">Παροχές Δωματίου</p>
                
                <ul style="padding:0px;margin-left:15px;" id="room_services">
                       
  
                        </ul>
                
                </div>
           
                
               
                
         </div>
                
                
            </div>
            
            
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  


        
        
        
        
        
        
        
        
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
								<h3 class="sidebar-heading">Ανανεώστε την αναζήτηση σας</h3>
								 <form class="colorlib-form" action="/booking/findDates" method="get">
				              	<div class="row">
                                    <div class="col-md-12" style="display:none;">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                      <div class="form-field">
				                     
				                      <input type="text" class="form-control " placeholder="Που θέλετε να πάτε" name="idhotels" value=<?php echo $this->vars['idhotels']; ?> required>
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
                    
                    
                    
                  
                    
                  <div class="col-md-9" id="slider" style="margin-top:20px;">
                     <h3 style="margin:0px;display:inline;"><a href="#" style="color:black;"><?php echo $this->vars['hotelname']; ?></a></h3>
                      <h5 style="margin:0px;display:inline;color:#c6a900;">
                      
                                                            
                                                           
                                                            
                                                                <?php for($star = 0; $star<$this->vars['category']; $star++):?>
                                                                <?php echo "<i class=icon-star-full></i>" ?>
                                                            
                                                            <?php endfor ?>
                                                            
                                                           
                      
                     </h5>
                        <p style="margin:0px;"><a href="#" style="color:black;"><?php echo $this->vars['address']; ?></a></p>
                      
                     
                      
                      
                    
                    </div>
					
                    
          
          
                <div class="col-md-9" id="slider" style="margin-top:20px;">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                   
                                        <?php if( isset($this->vars['final_path']) && count($this->vars['final_path'])>=2): ?>
                                         
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
                        
                    <div class="col-md-8">
                    
                   <p style="margin-top:15px;font-size:18px;"><em>
                        
                        <?php  echo $this->vars['description']?>
                       </em> </p>
                        
                        
                    </div>
                    
                    <div class="col-md-4">
                    
                        
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box" style="background-color:#d3ffdb;">
                                
								<h3 class="display-4">Υπηρεσίες</h3>
								<p>Παρακάτω μπορείτε να δείτε τις υπηρεσίες που προσφέρει το ξενοδοχείο</p>
                                
                                
				              	<div class="row justify-content-center" style="margin-top:20px;">
                                    
                                    <div class="col">
                                        
                                         <?php for($i = 0; $i<count($this->vars['services']); $i++):?>
                                    
                                 <i class="fas fa-check" style="padding:5px;background-color:white;"></i>
                                        <?php echo $this->vars['services'][$i] ?>
                                    <br> <br>
                                      
                         <?php endfor ?>
                                    
                                    
                                    </div>
                                    
                                   
				          
							</div>
                            
                           
						</div>
					</div>
                    
                  
                                  </div>
                                    
                                    
				             
                    
                    
                    <div class="col-md-12">
                                             <?php if( isset( $this->vars['rooms']['found'] )  && count($this->vars['rooms']['found'])!=0): ?>
                        
                      
                   <div class="row" style="padding:20px;background-color:#79f7a7">
                        
                       <h3 >Διαθεσημότητα</h3>
                       <p>Παρακάτω μπορείτε να κλείσεται τα δωμάτια που σας ενδιαφέρουν</p>
                       <div class="alert alert-info" role="alert">
                           Για να μπορέσεται να κάνετε κάποια κράτηση πρέπει πρώτα να έχετε συνδεθεί
                            </div>
                       
                        </div>
                          <?php endif ?>
                        
                         <?php if(  isset( $this->vars['rooms']['found'] )    && count($this->vars['rooms']['found'])==0): ?>
                        
                      
                   <div class="row" style="padding:20px;background-color:#79f7a7">
                        
                       <h3 >Διαθεσημότητα</h3>
                      
                       
                        <div class="alert alert-warning" role="alert">
                          <p>Δέν Βρέθηκαν Διαθέσημα Δωμάτια αυτή την στιγμή</p>
                            </div>
                      
                       
                        </div>
                          <?php endif ?>
                        
                        
                        
                        <?php if( !isset( $this->vars['checkIn'])  && !isset( $this->vars['checkOut'])):?>
                                
                   <div class="row" style="padding:20px;background-color:#79f7a7">
                        
                       <h3 >Διαθεσημότητα</h3>
                      
                       <div class="alert alert-info" role="alert">
                          
                            <p>Ελέξτε αν υπάρχουν διαθέσημα δωμάτια αυτην την στιγμή στο ξενοδοχείο</p>
                           
                            </div>
                       
                        </div>
                            
                        
                        <?php endif ?>
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    <div class="col-md-12" style="margin-top:20px;">
                           
                         <?php if( isset($this->vars['rooms']['found']) && count($this->vars['rooms']['found'])!=0): ?>
                        
                        <table class="table">
  <thead>
    <tr>
       
      <th scope="col">Ατομα</th>
      <th scope="col">Βρέθηκαν</th>
        <th scope="col">Από</th>
        <th scope="col">Εως</th>
        <th scope="col">Τελική Τιμή</th>
         <th scope="col">-</th>
     
    </tr>
  </thead>
  <tbody>
      
      
      
      
      
         <?php for($i = 0; $i<count($this->vars['roomsToUser']); $i++):?>
         <tr>
              <th scope="row" class="hotelid" style="display:none;"><?php echo $this->vars['idhotels']?></th>
             <th scope="row" class="hotelname" style="display:none;"><?php echo $this->vars['hotelname']?></th>
      <th scope="row" class="people">Γία <?php echo $this->vars['people']?> Άτομα</th>
      <td class="rooms"><?php echo $this->vars['roomsToUser'][$i] ?></td>
             <td class="from"><?php echo $this->vars['checkIn'] ?></td>
             <td class="until"><?php echo $this->vars['checkOut']?></td>
              <td class="price"><?php echo $this->vars['price'][$i]?>€</td>
       <td><a href="#" class="booking">Κράτηση</a></td>
     
    </tr>
    
      
        <?php endfor ?>
      
 
   
  </tbody>
</table>
              <?php endif ?>      
                    
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

        
        
        
        
        
        
 <script>
        $(".booking").click(function(e){
            e.preventDefault();
          
    
          
            $.post("/booking/bookHotel",
    {
        price: $(this).closest("td").prev().text(),
        until: $(this).closest("td").prev().prev().text(),
        from: $(this).closest("td").prev().prev().prev().text(),
        rooms:$(this).closest("td").prev().prev().prev().prev().text(),
        hotelname:$(this).closest("td").prev().prev().prev().prev().prev().prev().text(),
        idhotel:$(this).closest("td").prev().prev().prev().prev().prev().prev().prev().text()
    },
    function(data, status){
        alert(data);
    });
            
          
            
            
            
        });
        
        
        </script>
        
        
        
        
        
        
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script>
        
        $(".selectedRoom").on("click",function(e){
            e.preventDefault();
            
            var roomDetail = $(this).attr('href');
            
           var values = roomDetail.split('/');
            var tableName = values[0];
            var roomId = values[2];
            
          
            
             $.get("/booking/showRooms",
    {
        tableName: tableName,
        roomId: roomId
    },
    function(data, status){
                $("#roomCarousel .item").remove();
                   $("#roomCarousel .carousel-indicators").empty();
               
            var values =    JSON.parse(data);
            
                 var images = values['final_path'];
              
               
               
            
              
               
                 if(images.length==1){
                    $('<div class="active item"><img src='+images[0]+' width="300px">   </div>').appendTo('#roomCarousel .carousel-inner');
                $('<li data-target="#roomCarousel" data-slide-to="'+0+'"></li>').appendTo('#roomCarousel .carousel-indicators');
                    
                 }else{
                     
                    $('<div class="active item"><img src='+images[0]+' width="300px">   </div>').appendTo('#roomCarousel .carousel-inner');
                $('<li data-target="#roomCarousel" data-slide-to="'+0+'"></li>').appendTo('#roomCarousel .carousel-indicators');
                     
                        
                       
                       for(var j = 1; j < images.length; j++) {
                           
                             $('<div class="item"><img src='+images[j]+' width="300px">   </div>').appendTo('#roomCarousel .carousel-inner');
                            $('<li data-target="#roomCarousel" data-slide-to="'+j+'"></li>').appendTo('#roomCarousel .carousel-indicators');
                           
                       }
                     
                 }
                 
               
                   

               


   
 
  $('#roomCarousel').carousel();                
     
                 
               var services = values['services'].split('-');
                
                for(var j=0; j<services.length; j++){
                     $('<li>'+services[j]+'</li>').appendTo('#room_services');
                     
                }
          
                 
                 
            $("#roomSize").text(values['roomSize']);
            $("#description").text(values['description']);
            $("#contain").text(values['contain']);
                 
             $('#myModal').modal('toggle');
    });
            
             $("#roomSize").empty(); 
            $("#room_services").empty(); 
            $("#description").empty(); 
              $("#contain").empty(); 
          
        });
        
        
        
        </script>
        

	</body>
</html>

