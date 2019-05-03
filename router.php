<?php
define ('FORMS_PATH','views/AdminPanel/forms/');
define ('ADMIN_PAGES_PATH','views/AdminPanel/forms/');
define ('BOOKING_PAGES_PATH','views/Booking/pages/');
class Router
{
	

    static public function parse($url, $request)
    {
        
        
        
       
    
		
        $url = trim($url);
       
        $explode_url = explode('/', $url);
        $explode_url = array_slice($explode_url, 1);
        
      
  
     
        
           if ($url == "/AdminPanel"){
         
            $request->controller="tasks";
            $request->action="redirect";    
               
               
               
			
            $explode_url = array("hotelForm",ADMIN_PAGES_PATH);
            $request->params= $explode_url;
           
         }else if(strpos($url,'/AdminPanel') !==false && $explode_url[1] == 'forms' && $explode_url[2] !=""){
				$filePath = ROOT.FORMS_PATH.$explode_url[2].'.php';
            
               if(file_exists($filePath)){
                 
                $request->controller="tasks";
                $request->action="redirect"; 
               $explode_url = array($explode_url[2],FORMS_PATH);
               $request->params= $explode_url;
                   
               }
         
               
           }else if($url=="/booking/register"){
                $request->controller="booking";
                 $request->action="register"; 
                $request->params= [];
               
               
           }else if($url=='/booking/activity'){
               
                $request->controller="booking";
               $request->action="redirect";
               $explode_url=array($explode_url[1],BOOKING_PAGES_PATH);
               $request->params=$explode_url;
               
               
               
           }else if($url=='/booking/rent'){
               
                $request->controller="booking";
               $request->action="redirect";
               $explode_url=array($explode_url[1],BOOKING_PAGES_PATH);
               $request->params=$explode_url;
               
               
               
           }else if($url=='/booking/tours'){
               
                   $request->controller="booking";
               $request->action="redirect";
               $explode_url=array($explode_url[1],BOOKING_PAGES_PATH);
               $request->params=$explode_url;
               
               
               
               
               
           }else if($url=='/booking/cancelBooking'){
             
               $request->controller="booking";
                 $request->action="cancelBooking";
                 $request->params=[];
               
               
           }else if($url=='/booking/cancelCarBooking'){
                 $request->controller="booking";
                 $request->action="cancelCarBooking";
                 $request->params=[];
               
               
               
           }else if($url=='/booking/cancelMotosBooking'){
                $request->controller="booking";
                $request->action="cancelMotosBooking";
                 $request->params=[];
               
               
           }else if($url=='/booking/bookMotos'){
                 $request->controller="booking";
               
                 $request->action="motosBooking";
                 $request->params=[];
               
               
           }else if($url=='/booking/bookCars'){
                 $request->controller="booking";
                $request->action="carBooking";
                 $request->params=[];
               
               
           }else if($url=='/booking/myBooks'){
              
                  $request->controller="booking";
                 $request->action="showBookings";
                 
                $request->params=[];
               
           }else if($url=='/booking/bookHotel'){
               
                 $request->controller="booking";
                $request->action="bookHotel";
               $request->params=[];
             
               
           }else if($url=='/booking/login'){
                $request->controller="booking";
                 $request->action="login";
                $request->params=[];
               
           }else if($url=='/booking/logout'){
               
                 $request->controller="booking";
                 $request->action="logout";
                $request->params=[];
               
               
           }else if($url=='/booking/registeruser'){
             
               $request->controller="booking";
               $request->action="redirect";
               $explode_url=array("register",BOOKING_PAGES_PATH);
               
               $request->params= $explode_url;
               
               
               
           }else if($url=='/booking/tickets'){
               $request->controller="booking";
               $request->action="redirect";
               $explode_url = array("tickets",BOOKING_PAGES_PATH);
               
               $request->params= $explode_url;
               
               
               
           }else if(strpos($url,'booking/toursFinder?')){
                 $request->controller="booking";
                  $request->action="toursFinder";
                $request->params=[];
               
               
           }else if(strpos($url,'/AdminPanel') !==false && $explode_url[1] == 'sumbit' && $explode_url[2] !=null){
              $request->controller="tasks";
                $request->action="processForm"; 
               
                $request->params= array($explode_url[2]);
               
           }else if(strpos($url,'/AdminPanel') !==false && $explode_url[1] == 'sumbit' && $explode_url[2] !=null){
               
                $request->controller="tasks";
                $request->action="processForm"; 
               
                $request->params= array($explode_url[2]);
               
               
           }else if(strpos($url,'booking/location') && $explode_url[2]!=null){
              $request->controller="booking";
                $request->action="popularDestination";
               
              $request->params=array($explode_url[2]);
               
               
               
           }else if($url == "/Booking"){
              
               $request->controller="booking";
               $request->action="redirect";
               $explode_url = array($explode_url[0],BOOKING_PAGES_PATH);
               $request->params= $explode_url;
               
               
               
               
           }else if(strpos($url,'booking/results?') ){
               
        
               
               $request->controller="booking";
               $request->action="redirect";
               $explode_url = array("results",BOOKING_PAGES_PATH);
               
               
               $request->params= $explode_url;
               
           }else if(strpos($url,'booking/findDates?')){
                $request->controller="booking";
                $request->action="displayHotel";
          $request->params= [];
               
              
           }else if( strpos($url,'booking/showRooms?') ){
               $request->controller="booking";
                   $request->action="displayRooms";
               
               $request->params=[];
               
               
           }else if(strpos($url,'booking/ticketFinder?')){
               $request->controller="booking";
               $request->action="ticketFind";
                $request->params=[];
               
               
               
               
           }else if(strpos($url,'booking/showLandmark?')){
           
                $request->controller="booking";
               $request->action="displayLandmark";
                 $request->params=[];
               
           }else if(strpos($url,'booking/showhotel?')){
             
             $request->controller="booking";
               $request->action="displayHotel";
                 $request->params=[];
               
           }else if(strpos($url,'booking/mesuems?')){
               $request->controller="booking";
               $request->action="mesumFinder";
               $request->params=[];
               
               
               
              
               
           }else if(strpos($url,'booking/showlandmark/id') && $explode_url[3]!=null){
               $request->controller="booking";
                 $request->action="showSpecificLandmark";
                 $request->params=array($explode_url[3]);
               
               
           }else if( strpos($url,'booking/showmuseum/id') && $explode_url[3]!=null){
               
             
                $request->controller="booking";
                $request->action="showSpecificMesuem";
                $request->params=array($explode_url[3]);
             
               
           }else if( strpos($url,'booking/specifichotel/id') && $explode_url[3]!=null){
               $request->controller="booking";
               $request->action="showSpecificHotel";
               $request->params=array($explode_url[3]);
               
               
               
           }elseif(strpos($url,'booking/vehicleoffices?')){
               
                 $request->controller="booking";
               $request->action="officeFinder";
               $request->params=[];
               
               
               
           } else if(strpos($url,'booking/showMesuem?')){
             
              
               $request->controller="booking";
               $request->action="displayMesuem";
                 $request->params=[];
               
           }else if(strpos($url,'booking/musuemname?')){
          
               $request->controller="booking";
               $request->action="findMesuem";
                 $request->params=[];
               
               
           }else if(strpos($url,'booking/landmarks?')){
           
               $request->controller="booking";
               $request->action="findLandmarks";
                 $request->params=[];
               
               
           }else if(strpos($url,'booking/landmarkname?')){
               
                $request->controller="booking";
               $request->action="findLandmark";
                 $request->params=[];
               
           }
       
      
        
        

    }
    
   
    
    
}
?>