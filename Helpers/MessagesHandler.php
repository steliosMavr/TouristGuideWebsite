<?php
session_start();
class MessagesHandler {
    
    
    public function setSuccessfulMsg($msg){
        
        $_SESSION['msg'] = "<div class='alert alert-success'><strong>".$msg."</strong></div>";
          
  
    }
    
    
    public function setErrorMsg($msg){
        
         $_SESSION['msg'] = "<div class='alert alert-danger'><strong>".$msg."</strong></div>";
        
    }
    
    
    
    
}

?>