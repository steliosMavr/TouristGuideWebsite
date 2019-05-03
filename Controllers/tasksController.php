<?php

       


class tasksController extends Controller
{


 
 
    
    public function redirect($page,$path)
    {
        
       
        
        if($page=="singleRoomForm" || $page=="doubleRoomForm" || $page=="tripleRoomForm"){
            $MyModel=$this->loadModel("MyModel",'AdminPanel_Models/');
            $this->set($MyModel->getRecords("hotels"));
            }
        
            if($page=="motoForm" || $page=="carForm"){
                $MyModel=$this->loadModel("MyModel",'AdminPanel_Models/');
                $this->set($MyModel->getRecords("rent_offices"));
            }
        
        
        if($page=="toursForm"){
                $MyModel=$this->loadModel("MyModel",'AdminPanel_Models/');
                $this->set($MyModel->getRecords("tours_offices"));
            }
        
        
        
        $this->render($page,$path);
    
    }
    
    
    public function processForm($formName){
        
          
        
        
        if(isset($_POST['submit'])){
            
           $MyModel=$this->loadModel("MyModel",'AdminPanel_Models/');
            
            if($formName == "hotelform"){
                
               
                  
                  $userValues = $this->getUserData(array("hotelname","address","telephone","location","description","category"));
                  $hotelServices = $this->getUserDataFromMultipleArr(array("services"));
                  $userValues['services'] = $this->ArrayToString($hotelServices,'-'); 

                  $MyModel->setUserData($userValues );
                
              
                
                 if($MyModel->isDataValid() && $MyModel->isFilesValids("fileToUpload")){
                    $MyModel->handleFoldersCreation('/views/Booking/hotel_imgs',"hotel","hotels");
                    $MyModel->insertData("hotels");
                    $MyModel->uploadFiles("fileToUpload");
                    $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                    
                }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
 
            }else if($formName =="aeroplaneRoutesForm"){
                  $userValues = $this->getUserData(array("companyname","departureFrom","departure_date_time","destination","destination_date_time","ticketPrice"));
              
                $date = new DateTime($userValues['departure_date_time']);
                $userValues['departure_date_time']= $date->format('Y-m-d H:i:s');
                
                $date = new DateTime($userValues['destination_date_time']);
                $userValues['destination_date_time']= $date->format('Y-m-d H:i:s');
                
               
               
                 $MyModel->setUserData($userValues );
                if( $MyModel->insertData("aeroplane_tickets")){
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                }else{
                       $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                }
                
              
                
                
            }else if($formName =="shipsRoutesForm"){
                
                   $userValues = $this->getUserData(array("companyname","departureFrom","departure_date_time","destination","ticketPrice"));
              
                $date = new DateTime($userValues['departure_date_time']);
                $userValues['departure_date_time']= $date->format('Y-m-d H:i:s');
                
               
               
               
                 $MyModel->setUserData($userValues );
                if( $MyModel->insertData("ship_tickets")){
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                }else{
                       $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                }
                
                
                
                
                
                
                
                
                
            }else if($formName =="singleRoomForm"){
                
                
               
                  
                  $userValues = $this->getUserData(array("hotel_id","services","description","roomSize","contain"));
                  $hotelServices = $this->getUserDataFromMultipleArr(array("services"));
                  $userValues['services'] = $this->ArrayToString($hotelServices,'-'); 

                  $MyModel->setUserData($userValues );
                
              
                
                 if($MyModel->isDataValid() && $MyModel->isFilesValids("fileToUpload")){
                    $MyModel->handleFoldersCreation('/views/Booking/hotel_imgs/hotel'.$userValues['hotel_id'].'/singlerooms/',"singleroom","single_rooms");
                    $MyModel->insertData("single_rooms");
                    $MyModel->uploadFiles("fileToUpload");
                    $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                    
                }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }

                
                
            }else if($formName=="doubleRoomForm"){
                
                
                
               
                  
                  $userValues = $this->getUserData(array("hotel_id","services","description","roomSize","contain"));
                  $hotelServices = $this->getUserDataFromMultipleArr(array("services"));
                  $userValues['services'] = $this->ArrayToString($hotelServices,'-'); 

                  $MyModel->setUserData($userValues );
                
              
                
                 if($MyModel->isDataValid() && $MyModel->isFilesValids("fileToUpload")){
                    $MyModel->handleFoldersCreation('/views/Booking/hotel_imgs/hotel'.$userValues['hotel_id'].'/doublerooms/',"doubleroom","double_rooms");
                    $MyModel->insertData("double_rooms");
                    $MyModel->uploadFiles("fileToUpload");
                    $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                    
                }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
                
         
                
                
                
            }else if($formName=="tripleRoomForm"){
            
    
                
                  
                  $userValues = $this->getUserData(array("hotel_id","services","description","roomSize","contain"));
                  $hotelServices = $this->getUserDataFromMultipleArr(array("services"));
                  $userValues['services'] = $this->ArrayToString($hotelServices,'-'); 

                  $MyModel->setUserData($userValues );
                
              
                
                 if($MyModel->isDataValid() && $MyModel->isFilesValids("fileToUpload")){
                    $MyModel->handleFoldersCreation('/views/Booking/hotel_imgs/hotel'.$userValues['hotel_id'].'/triplerooms/',"tripleroom","triple_rooms");
                    $MyModel->insertData("triple_rooms");
                    $MyModel->uploadFiles("fileToUpload");
                    $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                    
                }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
            }else if($formName=="museumForm"){
                
                
                  $MyModel->setUserData( $this->getUserData(array("name","address","telephone","location","price","description")) );
                
              
                
                 if($MyModel->isDataValid() && $MyModel->isFilesValids("fileToUpload")){
                    $MyModel->handleFoldersCreation('/views/Booking/mesuem_imgs',"mesuem","mesuem");
                    $MyModel->insertData("mesuem");
                    $MyModel->uploadFiles("fileToUpload");
                    $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                    
                }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
              
                
                
            }else if($formName == "landmarkForm"){
             
                 
                  $MyModel->setUserData( $this->getUserData(array("name","address","telephone","location","price","description")) );
                  
                    
                if($MyModel->isDataValid() && $MyModel->isFilesValids("fileToUpload")){
                    $MyModel->handleFoldersCreation('/views/Booking/landmark_imgs',"landmark","landmarks");
                    $MyModel->insertData("landmarks");
                    $MyModel->uploadFiles("fileToUpload");
                    $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                    
                }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
              
                
                
            }else if($formName == "rentOfficeForm"){
             
                
                 $MyModel->setUserData( $this->getUserData(array("name","address","telephone","location")) );
                
                 if($MyModel->isDataValid()){
                      $MyModel->insertData("rent_offices");
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                 }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
                
                
                
                
            }else if($formName == "motoForm"){
                
                
              
              
                 $MyModel->setUserData( $this->getUserData(array("model","licence_number","kv","price","price_increase","office_id")) );
                
                 if($MyModel->isDataValid()){
                      $MyModel->insertData("motos");
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                 }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
                
                
                
            }else if($formName == "carForm"){
              
                
                 $MyModel->setUserData( $this->getUserData(array("model","licence_number","kivika","passengers_sits","price","category","price_increment","officeId")) );
                
                 if($MyModel->isDataValid()){
                      $MyModel->insertData("cars");
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                 }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
                
                
                
            }else if ($formName=="tourOfficeForm"){
                
                
             
                
                 $MyModel->setUserData( $this->getUserData(array("name","address","telephone","location")) );
                
                 if($MyModel->isDataValid()){
                      $MyModel->insertData("tours_offices");
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                 }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
                
                
                
            }else if( $formName=="toursForm" ){
                
                
                 $MyModel->setUserData( $this->getUserData(array("officeId","start","destination","departure_date","back_date","price")) );
                
             
                
                 if($MyModel->isDataValid()){
                      $MyModel->insertData("tours");
                      $this->setSuccessfulMsg("H Φόρμα Αποθηκεύτηκε Επιτυχώς");
                 }else{
                      $this->setErrorMsg("Συμπληρώστε Όλα Τα κενά");
                 }
                
            }
            
            
            
        }
        
        
        
         header("Location:/AdminPanel/forms/".$formName);
    }
    
    
   

  
    
   

    

    
   
   
    
    
        
        
    }
    
     
   
    
   
    
  
   
   

?>