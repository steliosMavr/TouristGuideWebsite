
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
    $form = $("<div class=forms id=carForm"+$formNumber +">");
           
$form.append("<div class=form-group >");
$form.append('<label>Μοντέλο</label>'); 
$form.append("<input class=form-control name=model[]>");
$form.append('</div>'); 
$form.append('<div class="form-group">');
$form.append('<label>Αρ/Κυκλοφορίας</label>'); 
$form.append("<input class=form-control name=licence_number[]>");
$form.append('</div>'); 
$form.append('<div class="form-group">');
$form.append('<label>Κυβικά</label>'); 
$form.append("<input class=form-control name=kivika[]>");
$form.append('</div>');     
$form.append('<div class="form-group">');
$form.append('<label>Θέσεις Επιβατών</label>'); 
$form.append("<input class=form-control name=passengers_sits[]>");
$form.append('</div>');
$form.append('<div class="form-group">');
$form.append('<label>Κατηγορία</label>'); 
$form.append("<input type=number min=1 step=1 max=5  class=form-control name=category[]>");
$form.append('</div>');       
$form.append('<div class="form-group">');
$form.append('<label>Ημερ/Χρέωση</label>'); 
$form.append("<input class=form-control name=price[]>");
$form.append('</div>'); 
$form.append('<div class="form-group">');
$form.append('<label>Αύξηση/Μέρα</label>'); 
$form.append("<input class=form-control name=price_increment[]>");
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
        
        
        $(document).on('click', '.removeButtn', function(){ 
            $formClass = $(this).parent().attr("id");
            
            $('#'+$formClass).remove();
            
           
        checkIfFormsExists();     
});
        

  $(document).on('click', ':submit', function(){ 
      
      
      
      $officeId = $("#officeSelection").val();
      
      $(".userOffice").val($officeId);
      
      
    
      
   
      
});
        
   
    
    
   