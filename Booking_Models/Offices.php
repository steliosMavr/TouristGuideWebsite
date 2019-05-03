<?php 


class Offices extends Base_Model{
    private $userData;
    
      
    public function setUserSearchParams($data){
        $this->userData = $data;
        
        
    }
    
    
    private function getOfficesRecords(){
        $data=[];
        $offices=$this->getTableRecords("rent_offices");
       
        
        for($i=0; $i<count($offices); $i++){
            if($offices[$i]["location"]==$this->userData['destination']){
                array_push($data,$offices[$i]);
                
            }
        }
        
        return $data;
        
    }
    
    public function cancelMotosBooking(){
           $data=$_SESSION['motoCardList'.$_SESSION['email']];
        $newData=array();
        for($i=0; $i<count($data); $i++){
            
            if($data[$i]['idMotos']!=$this->userData['motosId']){
                array_push($newData,$data[$i]);
               
              
            }
            
            
        }
        
      
        
        $_SESSION['motoCardList'.$_SESSION['email']]=$newData;
        return true;
        
        
    }
    
    
    public function cancelCarBooking(){
           $data=$_SESSION['carCardList'.$_SESSION['email']];
        $newData=array();
        for($i=0; $i<count($data); $i++){
            
            if($data[$i]['carId']!=$this->userData['carId']){
                array_push($newData,$data[$i]);
               
              
            }
            
            
        }
        
      
        
        $_SESSION['carCardList'.$_SESSION['email']]=$newData;
        return true;
        
        
    }
    
    public function bookCars(){
        unset($_SESSION['carCardList'.$_SESSION['email']]);
         if(isset($_SESSION['email'])){
            
             
        if(isset($_SESSION['carCardList'.$_SESSION['email']])){
         
            
            $data=$_SESSION['carCardList'.$_SESSION['email']];
            array_push($data,$this->userData);
          
           
            
           $_SESSION['carCardList'.$_SESSION['email']]=$data;
            
        }else{
            $data=array();
             array_push($data,$this->userData);
            $_SESSION['carCardList'.$_SESSION['email']]=$data;
        }
            
            
        }else{
            
            echo "Συνδεθείτε πρώτα για να κάνετε κράτηση";
            die();
            
        }
        
         echo "Η κράτηση σας έγινε με επιτυχία";
        die();   
     
        
        
    }
    
    public function bookMotos(){
     
        if(isset($_SESSION['email'])){
            
             
        if(isset($_SESSION['motoCardList'.$_SESSION['email']])){
         
            
            $data=$_SESSION['motoCardList'.$_SESSION['email']];
            array_push($data,$this->userData);
          
           
            
           $_SESSION['motoCardList'.$_SESSION['email']]=$data;
            
        }else{
            $data=array();
             array_push($data,$this->userData);
            $_SESSION['motoCardList'.$_SESSION['email']]=$data;
        }
            
            
        }else{
            
            echo "Συνδεθείτε πρώτα για να κάνετε κράτηση";
            die();
            
        }
        
         echo "Η κράτηση σας έγινε με επιτυχία";
        die();   
     
        
        
    }
    
    public function getCars(){
     
        $officesInfo=[];
        $data=[];
         $data1=[];
        $cars = $this->getTableRecords("cars");
        $offices = $this->getOfficesRecords();
        
       
        
        for($i=0; $i<count($offices); $i++){
           for($j=0; $j<count($cars); $j++){
                
             
               
            if($offices[$i]['idrent_offices']==$cars[$j]['officeId']){
        
                array_push($data1,$cars[$j]);
            }
               
           }
            
            
            array_push($officesInfo,$offices[$i]);
        
            
        }
        
           $data['cars'] = $data1;
           $data['officeInfo']=$officesInfo;
        
        
       // echo $data['officeInfo'][0]['name'];
       
      
        
        return $data;
        
    }
    
    
    public function getMotos(){
        
         $officesInfo=[];
        $data=[];
         $data1=[];
        $motos = $this->getTableRecords("motos");
        $offices = $this->getOfficesRecords();
        
          
        for($i=0; $i<count($offices); $i++){
           for($j=0; $j<count($motos); $j++){
                
             
               
            if($offices[$i]['idrent_offices']==$motos[$j]['office_id']){
        
                array_push($data1,$motos[$j]);
            }
               
           }
            
            array_push($officesInfo,$offices[$i]);
        
            
        }
            $data['motos']=$data1;
           $data['officeInfo']=$officesInfo;
        return $data;
        
        
    }
    
    
    
    
    
}



?>