<?php
 define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
class Rooms extends Base_Model {
   
    private $userData;
    
    
    
    
    
    public function getRoomById(){
         $roomRecords = $this->getTableRecords($this->userData['tableName']);
        
      
        for($i=0; $i<count($roomRecords); $i++){
           if($roomRecords[$i]['room_id'] == $this->userData['roomId']){
               
             return $roomRecords[$i];
             
           }

       }
        
    }
    

     
    
    
    private function calculateDatesDiff(){
        $checkIn = $this->userData['checkin'];
        $checkOut = $this->userData['checkout'];
             $date1=date_create($checkIn);
              $date2=date_create($checkOut);
        $diff=date_diff($date1,$date2);
        
        
        return $diff->format("%a");
        
        
        
        
    }
    
    
  
    
    
    public function setUserSearchParams($data){
        $this->userData = $data;
        
        
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
    
    
    
    public function loadImages($room){
  
        
        $path=[];
         
              $imagesDir = BASE_PATH.$room['images_path'];
       
        
             $files= scandir($imagesDir);

              for($j=2; $j<count($files); $j++){
                  
                  if($this->checkFiles( $files[$j] )){

                      array_push($path,$room['images_path'].$files[$j]);

                  }
                  
              }
              
            $room['final_path']=$path;
             
       
        
return $room;
        
    } 
    

    

   
        
   
    
    
    
    
    
    
    
    
    
    
    
}




?>