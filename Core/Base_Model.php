<?php


class Base_Model {
    
    protected function insert($table,array $data){
        
    if(empty($data)) {
        throw new InvalidArgumentException('Cannot insert an empty array.');
    }
    if(!is_string($table)) {
        throw new InvalidArgumentException('Table name must be a string.');
    }
        
        
    $fields = '`' . implode('`, `', array_keys($data)) . '`';
       
    $placeholders = ':' . implode(', :', array_keys($data));    
    $sql = "INSERT INTO {$table} ($fields) VALUES ({$placeholders})";   
    $stmt = Database::getBdd()->prepare($sql);   
        
        
     
        
     foreach($data as $placeholder => &$value) {
        $placeholder = ':' . $placeholder;
       
       $stmt->bindParam($placeholder, $value);
    }   
     
       
        
        
   if(!$stmt->execute()) {
        throw new ErrorException('Could not execute query');
       
    }

    /*
     * Check if any rows was actually inserted.
     */
    if($stmt->rowCount() == 0) {

        var_dump(Database::getBdd()->errorCode());

        throw new ErrorException('Could not insert data into users table.');
    }

    return true;
        
        
              
}
    
    protected function getTableRecords($tableName){
          $sql_statement ="SELECT * FROM ". $tableName;
       
         $stmt = Database::getBdd()->prepare( $sql_statement );
        
        $stmt->execute();
        
       $result = $stmt->fetchAll();
        
        return $result;
        
        
    }
    
     protected function getFilesLength($fieldName){
        
        return count($_FILES[ $fieldName ]['name']);
       
    }
    
         
    protected function checkFilesExt($file_input,$allowed){
        
        
         $totalFiles = $this->getFilesLength($file_input);
      
         $error=true;
        for($i=0; $i<$totalFiles; $i++){  
             $fileName = $_FILES[ $file_input]['name'][ $i ];
             $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            
            if(!in_array($ext,$allowed) ) {
               $error=false;
                break;
            }
            
        }
        
       return $error;
    }
    
    protected function upload($file_input,$path){
        $totalFiles = $this->getFilesLength($file_input);
        $error=true;
        
         for($i=0; $i<$totalFiles; $i++){
              $fileName = $_FILES[ $file_input]['name'][ $i ];
              $tmp_name = $_FILES[ $file_input ]['tmp_name'][ $i ];
             
             if(!move_uploaded_file($tmp_name, $path.$fileName)){
                 $error=false;
             }
             
  
         }
        
        return $error;
        
    }
    
  
      protected function createDirectory($path){
       
        if (!file_exists( $path)) {
             mkdir($path, 0777, true);
           
        }
        
    }
    
     public function getLastIdFromTable($tableName){
        
         $sql_statement ="SELECT * FROM ". $tableName;
       
         $stmt = Database::getBdd()->prepare( $sql_statement );
        
        $stmt->execute();
        
       $result = $stmt->fetchAll();
        
        
       if($result!=null){
        return  count($result) +1 ;
         
       }else{
           return 0+1;
          
       }
 
    }
    
    
    
}




?>