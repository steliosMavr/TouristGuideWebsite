
   
        
        
    
        
        checkIfFormsExists();
        function checkIfFormsExists(){
            
            
                 $('.motoForms').each(
  function() {
      
      $formNumber = ($(this).find('form')).length;
     
      if($formNumber==0){
        $(".msg").html("Για να Δημιουργήσετε Φόρμες Πατήστε το Κουμπί Παραπάνω");
           $('.sumbitButton').empty();
          
      }
      
      else{
          
           $('.sumbitButton').each(
  function() {
      
      $formNumber = ($(this).find('button')).length;
     
     if($formNumber==0){
          $('.sumbitButton').append('<button type="submit" class="btn btn-default">Αποθήκευση</button>');
     }
   
        
    });
          
     
             
          
         
            $(".msg").html("");
        

      }
        
    });
        
            
            
        }
        
     
        
        
   
        
       
    
    $("#addFormsButtn").click(function(){
       
      $('.motoForms').each(
  function() {
      
      $formNumber = ($(this).find('form')).length+1;
     
      if( $formNumber<=5){
          
           $form = $("<form class=form style=margin-bottom:10px; id=moto"+$formNumber +">");
$form.append("<div class=form-group >");
$form.append('<label>Μοντέλο</label>');          
$form.append("<input class=form-control>");
$form.append('</div>'); 
$form.append('<div class="form-group">');
$form.append('<label>Αρ/Κυκλοφορίας</label>');   
$form.append("<input class=form-control>");
$form.append('</div>'); 
$form.append('<div class="form-group">');
$form.append('<label>Κυβικά</label>'); 
$form.append("<input class=form-control>");
$form.append('</div>');      
$form.append('<div class="form-group">');
$form.append('<label>Κατηγορία</label>');
$form.append("<input class=form-control>");
$form.append('</div>');       
$form.append('<div class="form-group">');
$form.append('<label>Ημερ/Χρέωση</label>');
$form.append("<input class=form-control>");
$form.append('</div>');  
$form.append(' <br><button type="button" class="btn btn-danger btn-circle removeButtn"><i class="fa fa-times"></i></button>');       
 
        
        
$form.append("</form>");           
$('.motoForms').append($form);
       
          
          
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
        
   
    
    