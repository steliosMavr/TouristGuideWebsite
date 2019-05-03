<?php
require(ROOT . 'Helpers/Statements.php');
class DatabaseActions 
{
      
    
    public function insert($tableName,$userInputs){
        
        
        $statements = new Statements();
       
        $sql_statement = $statements->getInsertStatement($tableName,$userInputs);
       
      
        $stmt = Database::getBdd()->prepare( $sql_statement );
       
       
        if(  $stmt->execute($userInputs)){
          return true;
        }else{
          return false;
        }
          
    }
    
    
    public function getLastIdFromTable($tableName){
        
        
        
        $statements = new Statements();
        
         $sql_statement = $statements->getStatement($tableName);
       
         $stmt = Database::getBdd()->prepare( $sql_statement );
        
        $stmt->execute();
        
       $result = $stmt->fetchAll();
        
        
       if($result!=null){
        return  count($result) +1 ;
         
       }else{
           return 0+1;
          
       }
     
        
    }
    
    
    
    public function getTableRecords($tableName){
        $statements = new Statements();
         $sql_statement = $statements->getStatement($tableName);
        $stmt = Database::getBdd()->prepare( $sql_statement );
        
        $stmt->execute();
        
       $result = $stmt->fetchAll();
        
        
        return $result;
        
             
        
    }
    
    

  
}
?>