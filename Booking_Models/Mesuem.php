<?php

define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
class Mesuem extends Base_Model {

 private $userData;

  
    public function setUserSearchParams($data){
        $this->userData = $data;
       
    }
    
    
       public function findMesuemByLocation($data,$tablename){
        $mesuems=[];
        $destination = $this->userData['destination'];
       
        $mesumRecords = $this->getTableRecords($tablename);

        
       for($i=0; $i<count($mesumRecords); $i++){
           if($mesumRecords[$i]['location'] == $destination){
             
              array_push($mesuems,$mesumRecords[$i]);
             
           }

       }
        
        
        return $mesuems;
        
         
    }
    
    public function findMesuemByName($data){
        
        
        $name = $this->userData['n'];
       
        $mesumRecords = $this->getTableRecords("mesuem");

        
       for($i=0; $i<count($mesumRecords); $i++){
           if($mesumRecords[$i]['name'] == $name){
             
             return $mesumRecords[$i];
             
           }

       }
        
     
        
        
        
        
        
    }
       
    
    
      public function findLandmarkByName(){
           
            $landmarks=[];
        $name = $this->userData['n'];
       
        $landmarkRecords = $this->getTableRecords("landmarks");
      
       for($i=0; $i<count($landmarkRecords); $i++){
           if($landmarkRecords[$i]['name'] == $name){
          
               
             return $landmarkRecords[$i];
             
           }

       }
    
           
       }
        
    
    public function changeDescriptionLength($mesuems){
        
         for($i=0; $i<count($mesuems); $i++){
             $newDescription = substr( $mesuems[$i]['description'], 0, 200);  
             $newDescription=$newDescription.'....';
             $mesuems[$i]['description']=$newDescription;
         
       }
       return $mesuems;
        
    }
    
    
        public function loadImg($mesuem){
        
        $path=[];
         
              $imagesDir = BASE_PATH.$mesuem['images_path'];
              
             $files= scandir($imagesDir);

              for($j=2; $j<count($files); $j++){
                  
                  if($this->checkFiles( $files[$j] )){

                      array_push($path,$mesuem['images_path'].$files[$j]);

                  }
                  
              }
              
            $mesuem['final_path']=$path;
              $path=[];
      
        
return $mesuem;
        
        
    }
    
    
       public function getMesuemById($mesumId,$tablename){
           
         $mesumsRecords = $this->getTableRecords($tablename);
        for($i=0; $i<count($mesumsRecords); $i++){
           if($mesumsRecords[$i]['idmesuem'] == $mesumId){
               
             return $mesumsRecords[$i];
             
           }

       }
        
    }
    
    
       public function getLandmarkById($landmarkId,$tablename){
           
         $landmarkRecords = $this->getTableRecords($tablename);
        for($i=0; $i<count($landmarkRecords); $i++){
           if($landmarkRecords[$i]['idlandmarks'] == $landmarkId){
               
             return $landmarkRecords[$i];
             
           }

       }
        
    }
    
     
    public function loadImages($mesuems){
      
        
        $path=[];
          for($i=0; $i<count($mesuems); $i++){
              $imagesDir = BASE_PATH.$mesuems[$i]['images_path'];
              
             $files= scandir($imagesDir);

              for($j=2; $j<count($files); $j++){
                  
                  if($this->checkFiles( $files[$j] )){

                      array_push($path,$mesuems[$i]['images_path'].$files[$j]);

                  }
                  
              }
              
            $mesuems[$i]['final_path']=$path;
            $path=[];
       }
        
return $mesuems;
        
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
    
    

    




}






?>