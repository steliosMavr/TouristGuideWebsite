<?php

 define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
class Hotel extends Base_Model {
   
    private $userData;
    
    
    public $arr=array(1);
    
    
    public function findHotelsByLocation($data){
        $userHotels=[];
        $destination = $data['destination'];
       
        $hotelsRecords = $this->getTableRecords("hotels");

        
       for($i=0; $i<count($hotelsRecords); $i++){
           if($hotelsRecords[$i]['location'] == $destination){
              array_push($userHotels,$hotelsRecords[$i]);
             
           }

       }
        
        
        return $userHotels;
        
           
    
    
         
    }
    
    public function cancelHotel(){
     $data=$_SESSION['hotelCardList'.$_SESSION['email']];
        $newData=array();
        for($i=0; $i<count($data); $i++){
            
            if($data[$i]['idhotel']!=$this->userData['id']){
                array_push($newData,$data[$i]);
               
              
            }
            
            
        }
        
      
        
        $_SESSION['hotelCardList'.$_SESSION['email']]=$newData;
        return true;
        
    }
    
    
    public function bookHotel(){
        $this->userData['email']=$_SESSION['email'];
        
        // check if  exists
     
        
          
        if(isset($_SESSION['hotelCardList'.$this->userData['email']]) && count($_SESSION['hotelCardList'.$this->userData['email']])>0){
             $data=$_SESSION['hotelCardList'.$_SESSION['email']];
         
        
         for($i=0; $i<count($data); $i++){
            
            if($data[$i]['idhotel']==$this->userData['idhotel']){
               echo "Έχετε κλείσει ήδη αυτό το ξενοδοχείο";
                die();
               
              
            }
            
         }
            
        }

        
        
        
        if(isset($_SESSION['hotelCardList'.$this->userData['email']])){
         
            
            $data=$_SESSION['hotelCardList'.$this->userData['email']];
            array_push($data,$this->userData);
          
           
            
            $_SESSION['hotelCardList'.$this->userData['email']]=$data;
            
        }else{
            $data=array();
             array_push($data,$this->userData);
            $_SESSION['hotelCardList'.$this->userData['email']]=$data;
        }
        
  echo "Η κράτηση σας έγινε με επιτυχία";
    die();   
     
       
    
        
     // return true;
       
      
     
        
    }
    
    
     
   
    
    
    public function getRoomsId($data,$tablename){
        $arr=[];
        $rooms = $this->getTableRecords($tablename);
        
        for($i=0; $i<count($data); $i++){
            $counter = $data[$i];
            $myArr=[];
            
            for($j=0; $j<count($rooms); $j++){
                if(count($myArr)<$counter){
                    array_push($myArr,$rooms[$j]);
                }else{
                    break;
                }
            }
            
            if(count($myArr)!=0){
                
                array_push($arr,$myArr);
            }else{
                  array_push($arr,0);
            }
            
            
        }
        return $arr;
        
        
    }
    
    
    public function getHotelById($hotelId){
         $hotelsRecords = $this->getTableRecords("hotels");
        for($i=0; $i<count($hotelsRecords); $i++){
           if($hotelsRecords[$i]['idhotels'] == $hotelId){
               
             return $hotelsRecords[$i];
             
           }

       }
        
    }
    
    public function getR($arrayOfRooms,$doubleRooms,$tripleRooms){
         
            $final=[];
            $arr=[];
            for($i=0; $i<count($arrayOfRooms); $i++){
                 $myData=[];
                $prices=[];
               if($arrayOfRooms[$i]!=0){
                   $arr=$arrayOfRooms[$i];
 
                  for($j=0;$j<count($arr); $j++){
                      array_push($myData,'<a class=selectedRoom href=single_rooms/id/'.$arr[$j]['room_id'].' style=color:#0000EE;>1 Μονόκλινo Δωμάτιο</a>');
                     
                      
                  }
            
               
             }
                
                
                  if($doubleRooms[$i]!=0){
                   $double=$doubleRooms[$i];
                  for($j=0;$j<count($double); $j++){
                       
                     array_push($myData,'<a class=selectedRoom href=double_rooms/id/'.$double[$j]['room_id'].' style=color:#0000EE;>1 Δίκλινο Δωμάτιο</a>');
                    
                   
                     
                  }
               
               }
                
                
                  if($tripleRooms[$i]!=0){
                   $triple=$tripleRooms[$i];
                   
             
                  for($j=0;$j<count($triple); $j++){
                       array_push($myData,'<a class=selectedRoom href=triple_rooms/id/'.$triple[$j]['room_id'].' style=color:#0000EE;>1 Τρίκλινο Δωμάτιο</a>');
                       
                        
                  
                   
                     
                  }
              
               
               }
                
        array_push($final,implode("<br>",$myData));
                
              
           
            }
        
       
        return $final;
        
    }
    
      public function getPrices($arrayOfRooms,$doubleRooms,$tripleRooms){
           
            $final=[];
            $arr=[];
            for($i=0; $i<count($arrayOfRooms); $i++){
                 
                $prices=[];
               if($arrayOfRooms[$i]!=0){
                   $arr=$arrayOfRooms[$i];
 
                  for($j=0;$j<count($arr); $j++){
                   
                      array_push($prices,    $this->calculateDatesDiff() * intval($arr[$j]['price']) );
                     
                      
                  }
            
               
             }
                
                
                  if($doubleRooms[$i]!=0){
                   $double=$doubleRooms[$i];
                  for($j=0;$j<count($double); $j++){
                       array_push($prices,    $this->calculateDatesDiff() * intval($double[$j]['price']) );
                        
                     
                    
                   
                     
                  }
               
               }
                
                
                  if($tripleRooms[$i]!=0){
                   $triple=$tripleRooms[$i];
                   
             
                  for($j=0;$j<count($triple); $j++){
                        array_push($prices,    $this->calculateDatesDiff() * intval($triple[$j]['price']) );
                      
                        
                  
                   
                     
                  }
              
               
               }
                
                if(count($prices)>1){
                      $sum=0;
                    for($j=0; $j<count($prices); $j++){
                        $sum=$prices[$j]+$sum;
                
                        }    
                   $sumPrice=[];
                array_push($sumPrice,$sum);
                   array_push($final,implode($sumPrice));
                    
                }else{
                       array_push($final,implode($prices));
                }
                
              
                
          
        
                
     
                
              
           
            }
        return $final;
        
    }
    
   
    
    
       public function isDataValid(){
          $error=true;
        foreach($this->userData as $key => $userValue){
            if(empty($userValue)){
                    $error=false;
                    break; 
                }    
        }
        
      return $error;  
        
    }
    
    
    private function calculateDatesDiff(){
        $checkIn = $this->userData['checkin'];
        $checkOut = $this->userData['checkout'];
             $date1=date_create($checkIn);
              $date2=date_create($checkOut);
        $diff=date_diff($date1,$date2);
        
        
        return $diff->format("%a");
        
        
        
        
    }
    
  
    
    
    public function isDatesValid(){
        $checkIn = $this->userData['checkin'];
        $checkOut = $this->userData['checkout'];
        
        
        $checkInArr = explode('/',$checkIn);
        $checkOutArr = explode('/',$checkOut);
        
        
        
   
       
        
        
        
        if(strtotime($checkIn) == false || strtotime($checkOut)==false || strtotime($checkOut)>strtotime($checkIn)!=true) {
          return false;
        }
        
   
        
       
        
        if(strtotime($checkIn)==false && strtotime($checkOut)==false){
            return false;
        }
        
        if(checkdate($checkInArr[0],$checkInArr[1],$checkInArr[2]) && checkdate($checkOutArr[0],$checkOutArr[1],$checkOutArr[2])){
            return true;
        }else{
            return false;
        }
        
        
    }
    
    
    
    public function setUserSearchParams($data){
        $this->userData = $data;
        
        
    }
    
    
    
    
   
    
    public function changeDescriptionLength($hotels){
        
         for($i=0; $i<count($hotels); $i++){
             $newDescription = substr( $hotels[$i]['description'], 0, 360);  
             $newDescription=$newDescription.'....';
             $hotels[$i]['description']=$newDescription;
         
       }
       return $hotels;
        
    }
    
    public function loadImg($hotels){
        
        $path=[];
         
              $imagesDir = BASE_PATH.$hotels['images_path'];
              
             $files= scandir($imagesDir);

              for($j=2; $j<count($files); $j++){
                  
                  if($this->checkFiles( $files[$j] )){

                      array_push($path,$hotels['images_path'].$files[$j]);

                  }
                  
              }
              
            $hotels['final_path']=$path;
              $path=[];
      
        
return $hotels;
        
        
    }
    
    
    public function loadImages($hotels){
      
        
        $path=[];
          for($i=0; $i<count($hotels); $i++){
              $imagesDir = BASE_PATH.$hotels[$i]['images_path'];
              
             $files= scandir($imagesDir);

              for($j=2; $j<count($files); $j++){
                  
                  if($this->checkFiles( $files[$j] )){

                      array_push($path,$hotels[$i]['images_path'].$files[$j]);

                  }
                  
              }
              
            $hotels[$i]['final_path']=$path;
              $path=[];
       }
        
return $hotels;
        
    } 
    
    
    private function checkFiles($fileName){
        $allowed=array("jpeg","jpg","png");
         $error=true;
         $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        
            if(!in_array($ext,$allowed) ) {
               $error=false;
               
            }
        
        
        return $error;
        
    }
    
    

    
        public function printPartitions($target, $max, $s){
            
    if($target === 0 )
        array_push($this->arr,$s);
    else
        {
            if($max > 1)
            {
                
                $this->printPartitions($target, $max-1, $s);
            }
            if($max <= $target)
            {
                $this->printPartitions($target-$max, $max, $max . " " . $s);
            }
        }
            
           
            
          
}

    public function getRooms($records){
        
          
        for($i=0; $i<count($records); $i++){
            
            $singleRoomsAvailable = $this->getRoomCount($records[$i]['idhotels'],"single_rooms");
            $doubleRoomsAvailable = $this->getRoomCount($records[$i]['idhotels'],"double_rooms");
            $tripleRoomsAvailable = $this->getRoomCount($records[$i]['idhotels'],"triple_rooms");
         
           $rooms=$this->findRooms($singleRoomsAvailable,$doubleRoomsAvailable,$tripleRoomsAvailable);
            
           
           
            
            if($rooms!=null){
                  $records[$i]['rooms']=$rooms;
                $records[$i]['checkIn']=$this->userData['checkin'];
                $records[$i]['checkOut']=$this->userData['checkout'];
                $records[$i]['people']=$this->userData['people'];
             // print_r($records[$i]['rooms']['double']);
            
            }
            
            
      
            
        
        }
        
      
        
        return $records;
        
    }
    
    
    
    
    public function getRoomsss($records){
        
          
      
            
            $singleRoomsAvailable = $this->getRoomCount($records['idhotels'],"single_rooms");
            $doubleRoomsAvailable = $this->getRoomCount($records['idhotels'],"double_rooms");
            $tripleRoomsAvailable = $this->getRoomCount($records['idhotels'],"triple_rooms");
         
           $rooms=$this->findRooms($singleRoomsAvailable,$doubleRoomsAvailable,$tripleRoomsAvailable);
            
            
           
            
            if($rooms!=null){
                  $records['rooms']=$rooms;
                $records['checkIn']=$this->userData['checkin'];
                $records['checkOut']=$this->userData['checkout'];
                $records['people']=$this->userData['people'];
             // print_r($records[$i]['rooms']['double']);
            
            }
            
            
      
            
        
       
        
      
        
        return $records;
        
    }
    
    
    private function findRooms($singleRoomAvailable,$doubleRoomAvailable,$tripleRoomAvailable){
        $rooms=[];
       
        $singleRooms=0;
        $doubleRooms=0;
        $tripleRooms=0;
        
       $storeSingle=[];
        $storeDouble=[];
        $storeTriple=[];
      
        
        for($i=1; $i<count($this->arr); $i++){
            $bed = explode(" ",$this->arr[$i]);
            
            for($j=0; $j<count($bed); $j++){
                if($bed[$j]==1){
                    $singleRooms++;
                }else if($bed[$j]==2){
                    $doubleRooms++;
                }else if($bed[$j]==3){
                    $tripleRooms++;
                }
 
                
            }
            
           
            
            if($singleRooms!=0 && $doubleRooms==0 && $tripleRooms==0){
                 
                if($singleRoomAvailable>=$singleRooms){
                     array_push($rooms,$singleRooms.' Μονόκλινα Δωμάτια');
                    
                    
                     array_push($storeSingle,$singleRooms);
                      array_push($storeDouble,0);
                      array_push($storeTriple,0);
                   
                  
                }
                
            }else if($singleRooms!=0 && $doubleRooms!=0 && $tripleRooms==0){
                 if($singleRoomAvailable>=$singleRooms && $doubleRoomAvailable>=$doubleRooms){
                       array_push($rooms,$singleRooms.' Μονόκλινα'.$doubleRooms.' Δίκλινα Δωμάτια');
                     
                       array_push($storeSingle,$singleRooms);
                      array_push($storeDouble,$doubleRooms);
                      array_push($storeTriple,0);
                  
                }
                
                
                
            }else if($singleRooms!=0 && $doubleRooms!=0 && $tripleRooms!=0){
                 if($singleRoomAvailable>=$singleRooms && $doubleRoomAvailable>=$doubleRooms && $tripleRoomAvailable>=$tripleRooms){
                       array_push($rooms,$singleRooms.' Μονόκλινα'.$doubleRooms.' Δίκλινα'.$tripleRooms.' Τρίκλινα Δωμάτια');
                     
                     
                       array_push($storeSingle,$singleRooms);
                       array_push($storeDouble,$doubleRooms);
                       array_push($storeTriple,$tripleRooms);
                     
                     
                  
                }
                
            }else if($doubleRooms!=0 && $singleRooms==0 && $tripleRooms==0){
                if($doubleRoomAvailable>=$doubleRooms){
                     array_push($rooms, $doubleRooms.' Δίκλινα Δωμάτια');
                    
                    
                     array_push($storeDouble,$doubleRooms);
                     array_push($storeSingle,0);
                       array_push($storeTriple,0);
                    
                }
                
                
            }else if($doubleRooms!=0 && $singleRooms!=0 && $tripleRooms==0){
                if($doubleRoomAvailable>=$doubleRooms && $singleRoomAvailable>=$singleRooms){
                     array_push($rooms, $doubleRooms.' Δίκλινα'.$singleRooms.' Μονόκλινα Δωμάτια');
                      array_push($storeDouble,$doubleRooms);
                     array_push($storeSingle,$singleRooms);
                     array_push($storeTriple,0);
                  
                }
                
            }else if($doubleRooms!=0 && $singleRooms!=0 && $tripleRooms!=0){
                if($doubleRoomAvailable>=$doubleRooms && $singleRoomAvailable>=$singleRooms && $tripleRoomAvailable>=$tripleRooms){
                      array_push($rooms, $doubleRooms.' Δίκλινα'.$singleRooms.' Μονόκλινα'.$tripleRooms.' Τρίκλινα Δωμάτια');
                    
                         array_push($storeDouble,$doubleRooms);
                     array_push($storeSingle,$singleRooms);
                      array_push($storeTriple,$tripleRooms);
                   
                    
                }
                
            }else if($tripleRooms!=0 && $singleRooms==0 && $doubleRooms==0){
                if($tripleRoomAvailable>=$tripleRooms){
                     array_push($rooms, $tripleRooms.' Τρίκλινα Δωμάτια');
                    
                     array_push($storeTriple,$tripleRooms);
                     array_push($storeDouble,0);
                     array_push($storeSingle,0);
                  
                }
                
                
            }else if($tripleRooms!=0 && $singleRooms!=0 && $doubleRooms==0){
                 if($tripleRoomAvailable>=$tripleRooms && $singleRoomAvailable>=$singleRooms){
                      array_push($rooms,  $tripleRooms.' Τρίκλινα'.$singleRooms.' Μονόκλινα Δωμάτια');
                       array_push($storeTriple,$tripleRooms);
                     array_push($storeSingle,$singleRooms);
                       array_push($storeDouble,0);
                   
                }
                
            }else if($tripleRooms!=0 && $singleRooms!=0 && $doubleRooms!=0){
                 if($tripleRoomAvailable>=$tripleRooms && $singleRoomAvailable>=$singleRooms && $doubleRoomAvailable>=$doubleRooms){
                      array_push($rooms,  $tripleRooms.' Τρίκλινα'.$singleRooms.' Μονόκλινα'.$doubleRooms.' Δίκλινα Δωμάτια');
                     
                       array_push($storeTriple,$tripleRooms);
                       array_push($storeSingle,$singleRooms);
                         array_push($storeDouble,$doubleRooms);
                   
                }
                
            }
            
           
            
    
            
        $singleRooms=0;
        $doubleRooms=0;
        $tripleRooms=0;
           
           
         
        }
        
         $rooms['found']=$rooms;
         $rooms['single']=$storeSingle;
         $rooms['double']=$storeDouble;
         $rooms['triple']=$storeTriple;
        
        $storeSingle=[];
        $storeDouble=[];
       $storeTriple=[];

        
     
        
      return $rooms;
      
    }
    
    
   
            private function getRoomCount($hotel_id,$tableName){
        
        $counter=0;
         $rooms = $this->getTableRecords($tableName);
        
        for($i=0; $i<count($rooms); $i++){
            if($rooms[$i]['hotel_id'] == $hotel_id ){
                $counter++;
            }
            
        }
        
      return $counter;
        
    }
        
        
        
        
   
    
    
    
    
    
    
    
    
    
    
    
}




?>