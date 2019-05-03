<?php


class Tickets extends Base_Model {
     private $userData;
    
    
     public function setUserSearchParams($data){
        $this->userData = $data;
       
    }
    
    
    private function getTickets($table){
        $tickets=[];
       
       
        $ticketList = $this->getTableRecords($table);
       
        
        for($i=0; $i<count($ticketList); $i++){
         
            if($ticketList[$i]['departureFrom']==$this->userData['from'] && $ticketList[$i]['destination']==$this->userData['destination'] )
            strtotime(explode(" ",$ticketList[$i]['departure_date_time'])[0]);
                  
            
             $user_departure_date = new DateTime($this->userData['departure_date']);
             $user_departure_date=strtotime($user_departure_date->format('Y-m-d'));
            
          if(strtotime(explode(" ",$ticketList[$i]['departure_date_time'])[0]) == $user_departure_date){
           
              $numberOfPeople = intval($this->userData['people']);
              $ticketPrice = intval($ticketList[$i]['ticketPrice']);
            
              $finalPrice = $numberOfPeople * $ticketPrice;
              
              $ticketList[$i]['ticketType']=$this->userData['ticketType'];
              $ticketList[$i]['ticketPrice']=$finalPrice;
              $ticketList[$i]['people']=$this->userData['people'];
              
           array_push($tickets,$ticketList[$i]);
          }
       
                
           
        }
        return $tickets;
        
    }
    
    
    
    public function findTickets($table){
        $tickets = $this->getTickets($table);
      
   
        return $tickets;
        
    }
    
    
    
}




?>