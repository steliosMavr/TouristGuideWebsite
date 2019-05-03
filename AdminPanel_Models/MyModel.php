<?php
define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
class MyModel extends Base_Model{
    private $userData,$finalImgPath;
    
  
    
 
    public function setUserData($data){
        $this->userData = $data;
       
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
    
    public function insertData($tableName){
        return $this->insert($tableName, $this->userData );  
    }
    
  
    public function getRecords($tableName){
        return $this->getTableRecords($tableName);
    }

    public function handleFoldersCreation($firstFolderPath,$subFolderName,$tableName){
        
         $this->createDirectory(BASE_PATH.$firstFolderPath);
         $finalPath = BASE_PATH.$firstFolderPath.'/'.$subFolderName.$this->getLastIdFromTable($tableName).'/';
         $this->createDirectory($finalPath);
        
        $this->$finalImgPath=$finalPath;
        
         $this->userData['images_path']=$firstFolderPath.'/'.$subFolderName.$this->getLastIdFromTable($tableName).'/';
        
    }
    
    public function uploadFiles($fieldName){
        
          return $this->upload($fieldName,$this->$finalImgPath);
        
    }
    
      
    public function isFilesValids($fieldName){
         if($this->getFilesLength($fieldName)<=5 && $this->checkFilesExt($fieldName,array("jpg","png")) ){
             return true;
         }
        
    }



}

?>