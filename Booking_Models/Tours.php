<?php


class Tours extends Base_Model {
     private $userData;
    
    
     public function setUserSearchParams($data){
        $this->userData = $data;
       
    }
    
    
    private function getTours(){
        $tours=[];
       
       
        $tourList = $this->getTableRecords("tours_offices");
       
        
        for($i=0; $i<count($tourList); $i++){
         
            if($tourList[$i]['location']==$this->userData['destination']){
                   
           array_push($tours,$tourList[$i]);
          
            }
   
           
       
                
           
        }
        return $tours;
        
    }
    
    
    
    public function findTours(){
      $officesList = $this->getTours();
        $officesInfo=[];
        $data1=[];
      $tours = $this->getTableRecords("tours");
        $data=[];
           
        for($i=0; $i<count($officesList); $i++){
           for($j=0; $j<count($tours); $j++){
                
             
               
            if($officesList[$i]['idtours_offices']==$tours[$j]['officeId']){
                array_push($data1,$tours[$j]);
              //  array_push($data,$tours[$j]);
            }
               
           }
            
            array_push($officesInfo,$officesList[$i]);
        
            
        }  
            $data['tours']=$data1;
           $data['officeInfo']=$officesInfo;
        return $data;
        
    }
    
    
    
}




?>