<?php

       


class bookingController extends Controller
{


 
 
    
    public function redirect($page,$path)
    {
        
       
       
        
       if($page=="results"){
            $hotelRecords=$this->hotelSearch();
          
            $this->set($hotelRecords);
       }
       
        $this->render($page,$path);
    
    }
    
    
  
    
    public function mesumFinder(){
        $userData = $this->getUserDataGetMethod(array("destination"));
        $mesuem = $this->loadModel("Mesuem","Booking_Models/");
        $mesuem->setUserSearchParams($userData);
        $records = $mesuem->findMesuemByLocation($userData,"mesuem");
        
      if(count($records)!=0){
          $records = $mesuem->loadImages($records);
          $records = $mesuem->changeDescriptionLength($records);
      }
        
         $this->set($records);
        $this->render("mesuem_results","views/Booking/pages/");
       
        
    }
    
    public function findLandmarks(){
           $userData = $this->getUserDataGetMethod(array("destination"));
              $mesuem = $this->loadModel("Mesuem","Booking_Models/");
         $mesuem->setUserSearchParams($userData);
          $records = $mesuem->findMesuemByLocation($userData,"landmarks");
        
          if(count($records)!=0){
          $records = $mesuem->loadImages($records);
          $records = $mesuem->changeDescriptionLength($records);
      }    
        
         $this->set($records);
        $this->render("landmarks_results","views/Booking/pages/");
        
    }
    
    
    public function findMesuem(){
         $userData = $this->getUserDataGetMethod(array("n"));
         $mesuem = $this->loadModel("Mesuem","Booking_Models/");
        $mesuem->setUserSearchParams($userData);
          $records = $mesuem->findMesuemByName($userData);
        
        
        if($records!=null){
            $records=$mesuem->loadImg($records);
        }
           
      
        
        
        $this->set($records);
        $this->render("mesuemdetails","views/Booking/pages/");
        
        
        
    }
    
    public function displayMesuem(){
        $userData = $this->getUserDataGetMethod(array("idmesuem"));
        $mesuem = $this->loadModel("Mesuem","Booking_Models/");
         $mesuem->setUserSearchParams($userData);
         $records=$mesuem->getMesuemById($userData['idmesuem'],"mesuem"); 
        
         $records=$mesuem->loadImg($records);
     
        $this->set($records);
        $this->render("mesuemdetails","views/Booking/pages/");
        
        
    }
    
   
    
    public function cancelBooking(){
        
          $userData = $this->getUserData(array("id"));
          $hotel = $this->loadModel("Hotel","Booking_Models/");
         $hotel->setUserSearchParams($userData);
        if( $hotel->cancelHotel()){
            echo "Η κράτηση ακυρώθηκε με επιτυχία";
        }
       
        
        
        
        
    }
    
    public function bookHotel(){
       
       
         $userData = $this->getUserData(array("price","until","from","rooms","idhotel","hotelname"));
   
        
       $hotel = $this->loadModel("Hotel","Booking_Models/");
        $hotel->setUserSearchParams($userData);
      
        
        if(!isset($_SESSION['email'])){
            echo "Πρέπει να συνδεθείτε για να κάνετε κράτηση";
            die();
        }else{
              $hotel->bookHotel();
        }
      
        
      
        
    }
    
    public function register(){
        $userData = $this->getUserData(array("email","pwd","repeatpwd"));
           $user = $this->loadModel("User","Booking_Models/");
        $user->setUserSearchParams($userData);
         $user->insertUser();
       header("Location: /booking/registeruser");
        
        
    }
    
    
    public function carBooking(){
         $userData = $this->getUserData(array("carOfficeName","carOfficeLocation","carOfficeTelephone","carOfficeAddress","carKv","carPriceIncrement","carPassengerSits","carModel","carId","carPrice"));
        
      
               $office = $this->loadModel("Offices","Booking_Models/");
        
        $office->setUserSearchParams($userData);
         $office->bookCars();
        
        
        
    }
    
    public function cancelMotosBooking(){
      
         $userData = $this->getUserData(array("motosId"));
          $office = $this->loadModel("Offices","Booking_Models/");
        
        $office->setUserSearchParams($userData);
        
        if(  $office->cancelMotosBooking()){
              echo "Η κράτηση ακυρώθηκε με επιτυχία";
        }
      
        
        
        
    }
    
    public function cancelCarBooking(){
         $userData = $this->getUserData(array("carId"));
          $office = $this->loadModel("Offices","Booking_Models/");
        
        $office->setUserSearchParams($userData);
        
        if(  $office->cancelCarBooking()){
              echo "Η κράτηση ακυρώθηκε με επιτυχία";
        }
        
        
    }
    
    
    public function motosBooking(){
            $userData = $this->getUserData(array("motosOfficeAddress","motosOfficeTelephone","motosOfficeLocation","motosOfficeName","priceIncrement","motoskv","idMotos","MotoPrice","MotoModel"));
               $office = $this->loadModel("Offices","Booking_Models/");
        
        $office->setUserSearchParams($userData);
        $office->bookMotos();
        
        
    }
    
    public function logout(){
        unset($_SESSION['email']);
         header("Location: /Booking");
    }
    
    public function login(){
        $userData = $this->getUserData(array("email","pwd"));
         $user = $this->loadModel("User","Booking_Models/");
         $user->setUserSearchParams($userData);
        $user->authenticate();
    }
    
    
    public function ticketFind(){
          $userData = $this->getUserDataGetMethod(array("from","destination","departure_date","back_date","ticketType","people"));
           
          $tickets = $this->loadModel("Tickets","Booking_Models/");
          $tickets->setUserSearchParams($userData);
        
        
        if($userData['ticketType']=="aeroplane"){
         $list =  $tickets->findTickets("aeroplane_tickets"); 
          
        }
        
         if($userData['ticketType']=="ships"){
           $list= $tickets->findTickets("ship_tickets"); 
        }
        
        
       
                 
         
      $this->set($list);

      $this->render("ticketlist","views/Booking/pages/");
        
    }
    
    public function toursFinder(){
        $userData = $this->getUserDataGetMethod(array("destination"));
        $tour = $this->loadModel("Tours","Booking_Models/");
        $tour->setUserSearchParams($userData);
        
        $tourList = $tour->findTours();
        
        
        $this->set($tourList);
          $this->render("tourofficesresults","views/Booking/pages/");
        
        
        
    }
    
    public function officeFinder(){
         $userData = $this->getUserDataGetMethod(array("destination","vehicleType"));
        $office = $this->loadModel("Offices","Booking_Models/");
        $office->setUserSearchParams($userData);
      
        
        if($userData['vehicleType']=="cars"){
           
            $cars = $office->getCars();
            $cars['vehicleType']="cars";
          
           $this->set($cars);
            
        
           
            $this->render("officesresults","views/Booking/pages/");
            
        }
        
        if($userData['vehicleType']=="motos"){
            
            $motos = $office->getMotos();
            $motos['vehicleType']="motos";
            $this->set($motos);
             $this->render("officesresults","views/Booking/pages/");
            
        }
        
        
        
    }
    
    
    public function findLandmark(){
         $userData = $this->getUserDataGetMethod(array("n"));
         $mesuem = $this->loadModel("Mesuem","Booking_Models/");
         $mesuem->setUserSearchParams($userData);
          $records = $mesuem->findLandmarkByName($userData);
            
          if($records!=null){
            $records=$mesuem->loadImg($records);
        }
           
        
          $this->set($records);
          $this->render("landmarkdetails","views/Booking/pages/");
    }
    
    
    public function displayLandmark(){
         $userData = $this->getUserDataGetMethod(array("idlandmarks"));
      
         $mesuem = $this->loadModel("Mesuem","Booking_Models/");
        
          $mesuem->setUserSearchParams($userData);
          $records=$mesuem->getLandmarkById($userData['idlandmarks'],"landmarks"); 
        
         $records=$mesuem->loadImg($records);
         $this->set($records);
        $this->render("landmarkdetails","views/Booking/pages/");
        
    }
    

    public function popularDestination($location){
        
        $userData['destination']=$location;
        
          $hotel = $this->loadModel("Hotel",'Booking_Models/');
          $records=$hotel->findHotelsByLocation($userData); 
         $records = $hotel->changeDescriptionLength($records);
         $records = $hotel->loadImages($records);
          $this->set($records);
        $this->render("results","views/Booking/pages/");
        
    }
    
    public function hotelSearch(){
   
      

        $userData = $this->getUserDataGetMethod(array("destination","people","checkin","checkout"));
        $hotel = $this->loadModel("Hotel",'Booking_Models/');
        $hotel->setUserSearchParams($userData);
        $records=$hotel->findHotelsByLocation($userData); 
        
        
       
        
        if($hotel->isDataValid() &&  $hotel->isDatesValid()){
          
            $hotel->printPartitions(intval($userData['people']),3,' ');
            
          
            $records=$hotel->getRooms($records);
            
         
            
        }else{
           
             if($records!=null){
               
                $records = $hotel->changeDescriptionLength($records);
        }
            
            
    }

         $records = $hotel->loadImages($records);
            
         
          return $records;
      
       
    
     
    }
    
    public function showSpecificLandmark($id){
        $landmarks = $this->loadModel("Mesuem",'Booking_Models/');
        $records = $landmarks->getLandmarkById($id,"landmarks");
        $records=$landmarks->loadImg($records);
          $this->set($records);
          $this->render("landmarkdetails","views/Booking/pages/");
        
    }
    
    public function showSpecificMesuem($id){
        $mesuem = $this->loadModel("Mesuem",'Booking_Models/');
        $records = $mesuem->getMesuemById($id,"mesuem");
      
        $records=$mesuem->loadImg($records);
       $this->set($records);
         $this->render("mesuemdetails","views/Booking/pages/");
        
    }
    
    public function showSpecificHotel($id){
         $hotel = $this->loadModel("Hotel",'Booking_Models/');
        $records=$hotel->getHotelById($id); 
          $records=$hotel->loadImg($records);
           $records['services']=explode("-",$records['services']);
          $this->set($records);
        
      
        $this->render("hoteldetails","views/Booking/pages/");
        
    }
    
    
    public function displayHotel(){
         $userData = $this->getUserDataGetMethod(array("idhotels","people","checkin","checkout"));
        
        
        
        
           $hotel = $this->loadModel("Hotel",'Booking_Models/');
          $hotel->setUserSearchParams($userData);
        
     
        
            $records=$hotel->getHotelById($userData['idhotels']); 
        
       
          if($hotel->isDataValid() &&  $hotel->isDatesValid()){
          
            $hotel->printPartitions(intval($userData['people']),3,' ');
             $records = $hotel->getRoomsss($records);
           
            
        }
        $records=$hotel->loadImg($records);
        $records['services']=explode("-",$records['services']);
        
       
      
        if(isset($records['rooms']['found']) && count($records['rooms']['found'])!=0){
            
            $singleRooms=$hotel->getRoomsId($records['rooms']['single'],'single_rooms');
             $doubleRooms=$hotel->getRoomsId($records['rooms']['double'],'double_rooms');
            $tripleRooms = $hotel->getRoomsId($records['rooms']['triple'],'triple_rooms');
           
         
            
            $records['roomsToUser']=$hotel->getR($singleRooms,$doubleRooms,$tripleRooms);
            $records['price']=$hotel->getPrices($singleRooms,$doubleRooms,$tripleRooms);
           
            
          
            
     
            
            
            
        }
        
     
      
        $this->set($records);
        
      
        $this->render("hoteldetails","views/Booking/pages/");
        
        
        
        
    }
    
    
    
    public function displayRooms(){
        
      
         $userData = $this->getUserDataGetMethod(array("tableName","roomId"));
        $room = $this->loadModel("Rooms",'Booking_Models/');
        $room->setUserSearchParams($userData);
        $roomDetail = $room->getRoomById();
        
        
       $roomDetail = $room->loadImages($roomDetail); 
       
       
        echo json_encode($roomDetail);
        
        
      
        
        
        
        
    }
    
    
    
    
    
}
   
    
   
    
  
   
   

?>