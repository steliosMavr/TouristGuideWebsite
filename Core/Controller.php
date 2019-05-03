<?php
session_start();
    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = $d;
        }

        function render($filename,$path)
        {
           
            ob_start();
            include(ROOT . $path.$filename . '.php');
            $this->vars=ob_get_contents(); 
            ob_end_clean();
            
            echo $this->vars;
         
           
        }
        
        
        protected function getUserDataFromMultipleArr($required_form_fields){
           
            $data=[];
            
             foreach ($required_form_fields as $key => $value){
                  $inputName = $required_form_fields[$key];
                
                  if(isset( $_POST[ $inputName ]) && is_array($_POST[ $inputName ])){
                     
                       $count = count($_POST[$inputName]);
                       for($i=0; $i<$count; $i++){
                            if(!empty( $_POST[ $inputName ][$i] )){
                               
                                array_push($data,$_POST[ $inputName ][$i]);
                   
                        }

            }
                  }else{
                     return false;
                }
                 
             }
           return $data;
        }
        
        
        
        protected function getUserData($required_form_fields){
            
            $array=[];
            
            foreach ($required_form_fields as $key => $value){
                $inputName = $required_form_fields[$key];
              
                
                if(isset( $_POST[ $inputName ]) && !empty( $_POST[ $inputName ] )){
                  $array[ $inputName ] =  $_POST[ $inputName ];
                      
                }else{
                    $array[ $inputName ] = "";
                }   
            }
            
          
           return $array;
              
        }
        
        protected function getUserDataGetMethod($required_form_fields){
            
            $array=[];
            
            foreach ($required_form_fields as $key => $value){
                $inputName = $required_form_fields[$key];
              
                
                if(isset( $_GET[ $inputName ]) && !empty( $_GET[ $inputName ] )){
                  $array[ $inputName ] =  $_GET[ $inputName ];
                      
                }else{
                    $array[ $inputName ] = "";
                }   
            }
                
           return $array;
              
        }
        
        
        protected function loadModel($name,$p){
            
            
            $path = ROOT . $p.$name.'.php';
            
            if(file_exists($path)){
                
                require ROOT . $p.$name.'.php';
                $modelName = $name;
                
                $model = new $modelName();
               
                return $model;
                
                
            }
            
            
        }
        
        
        
      
        
    
        protected function ArrayToString($array,$seperator){
            
            if($array!=false){
            return implode($seperator,$array);     
            }
           
        }
   

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $val=$form[$key];
               
                $form[$key] = $this->secure_input($val);
                
            }
            return $form;
        }
        
    protected function setSuccessfulMsg($msg){
        
        $_SESSION['msg'] = "<div class='alert alert-success'><strong>".$msg."</strong></div>";
          
  
    }
    
    
    protected function setErrorMsg($msg){
        
         $_SESSION['msg'] = "<div class='alert alert-danger'><strong>".$msg."</strong></div>";
        
    }
    
    
        
       
        
       
        
 
    
     
        
        
       
     
      

    }
?>