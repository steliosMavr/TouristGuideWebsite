<?php

class UploadAction {
    

    
 
    
    
    public function uploadFiles($uploadFieldName,$path){
       $totalFiles = count($_FILES[ $uploadFieldName ]['name']);
        
        
         for($i=0; $i<$totalFiles; $i++){
            $fileName = $_FILES[ $uploadFieldName]['name'][ $i ];
            $tmp_name = $_FILES[ $uploadFieldName ]['tmp_name'][ $i ];
            $error = $_FILES[ $uploadFieldName ]['error'][ $i ];
             
             if($error>0){
                return false;
                 
                 
             }else{
                 
                  if( $this->checkFileType($fileName) ){
                      
                      if(! move_uploaded_file($tmp_name, $path.$fileName)){
                          break;
                          return false;
                      }
                  }
                 
             }
             
             
         }
        
        return true;
        
     
        
        
    }
    
  
 
    
   
    
    

    
    
    
    private function checkFileType($file_input,$allowed){
        
        $file_name = $_FILES[$file_input]['name'];
        
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        echo $ext;
        die();
      
        if(!in_array($ext,$allowed) ) {
        echo 'error';
        }else{
        return true;
        } 
        
    }
    
    
    
}




?>