
        checkIfFormsExists();


        function checkIfFormsExists(){
            
            
                 $('.carForms').each(
  function() {
      
      $formNumber = ($(this).find('.forms')).length;
     
      if($formNumber==0){
        $(".msg").html("Για να Δημιουργήσετε Φόρμες Πατήστε το Κουμπί Παραπάνω");
           $('.sumbitButton').empty();
          
      }
      
      else{
         
           $('.sumbitButton').each(
  function() {
      
      $formNumber = ($(this).find('button')).length;
     
     if($formNumber==0){
          $('.sumbitButton').append('<button type="submit" name="submit" class="btn btn-default btn-block">Αποθήκευση</button>');
     }
   
        
    });
          
     
             
 $(".msg").html("");
        

      }
        
    });
        
            
            
        }
        
     
        
        
   
        
       
    
    $("#addFormsButtn").click(function(){
       
      $('.carForms').each(
  function() {
      
      $formNumber = ($(this).find('.forms')).length+1;
     
      if( $formNumber<=5){
    $form = $("<div class=forms id=carForm"+$formNumber +" style='border-bottom:1px dotted  black; padding:10px;'>");
           
$form.append("<div class=form-group >");
$form.append('<label>Περιγραφή</label>'); 
$form.append("<textarea class=form-control rows=5 id=comment></textarea>");
$form.append('</div>'); 
$form.append('<div class="form-group">');
$form.append('<label>Μέγεθος Δωματίου (τ.μ)</label>'); 
$form.append("<input class=form-control name=[]>");
$form.append('</div>'); 
    

      
$form.append('<div class="form-group">');
$form.append('<label>Ημερ/Χρέωση</label>'); 
$form.append("<input class=form-control name=>");
$form.append('</div>'); 
          

      
$form.append('<div class="form-group">');
$form.append('<label>Υπηρεσίες (Προοαιτικές</label>'); 
$form.append(' <button type="button" class="btn btn-success btn-circle addButtn"> +  </button>');
$form.append('</div>'); 
          

    
 $form.append('<div class="form-group  servicesDiv">');
          
  $form.append('</div>');         
          
          
          
$form.append('<div class="form-group">');

$form.append('<input  type=hidden class="userOffice form-control" name=officeId[]>');
$form.append('</div>');  
          
          
$form.append(' <br><button type="button" class="btn btn-danger btn-circle removeButtn"><i class="fa fa-times"></i></button>');       
 $form.append('</div>');  
        
        
        
$('.carForms').append($form);
       
          
          
      }
   
  }
);
      
        
        
        
        
        
    checkIfFormsExists();
    });


 $(document).on('click', '.addButtn', function(){ 
 
     
     
     
     
  
          
     
     
     
    
   $form = $('<label>Υπηρεσία</label>');
     $form.append("<input class=form-control name=services[] >");
     $($(this).parent().find(".servicesDiv")).append($form);
     
 });
        
        
        $(document).on('click', '.removeButtn', function(){ 
            $formClass = $(this).parent().attr("id");
            
            $('#'+$formClass).remove();
            
           
        checkIfFormsExists();     
});
        

  $(document).on('click', ':submit', function(){ 
      
      
      
      $officeId = $("#officeSelection").val();
      
      $(".userOffice").val($officeId);
      
      
    
      
   
      
});
        
   
    
    
   