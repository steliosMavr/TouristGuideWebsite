<?php
session_start();

class User extends Base_Model {
    
    public function setUserSearchParams($data){
        $this->userData = $data;
       
    }
    
    
    private function checkForPasswords(){
        if($this->userData['pwd']==$this->userData['repeatpwd']){
            return true;
            
        }else{
            return false;
        }
        
        
    }
    
    public function authenticate(){
       
        $users = $this->getTableRecords("users");
     
        
        for($i=0; $i<count($users); $i++){
            if( $users[$i]['email']==$this->userData['email'] &&  $users[$i]['pwd']==$this->userData['pwd']){
                $_SESSION['email'] = $this->userData['email'];
                break;
            }
        }
        
        if(!isset($_SESSION['email'])){
             $_SESSION['msg1']="<p style=color:red;font-size:20px;>Το Email ή ο κωδικός είναι λάθος</p>";
            
             header("Location: /booking/registeruser");
        }else{
             header("Location: /Booking");
        }
        
    }
    
    
    public function insertUser(){
        $user=array("email"=>$this->userData['email'],"pwd"=>$this->userData['pwd']);
        if($this->checkForPasswords()){
            $this->insert("users",$user);
            $_SESSION['msg']="<p style=color:green;font-size:20px;>Η εγγραφή σας έγινε με επιτυχία </p>";
          
            
        }else{
            $_SESSION['msg']="<p style=color:red;font-size:20px;>Οι κωδικοί δεν ταιρίαζουν</p>";
         
        }
        
      
        
    }
    
    
    
    
}


?>