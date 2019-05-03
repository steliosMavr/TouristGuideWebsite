<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>Πίνακας Ελέγχου</title>

    <!-- Bootstrap Core CSS -->
    <link href="/views/AdminPanel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <link href="/views/AdminPanel/dist/css/forms.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="/views/AdminPanel/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    
    <!-- Morris Charts CSS -->
  <link href="/views/AdminPanel/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/views/AdminPanel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include $_SERVER["DOCUMENT_ROOT"].'/views/AdminPanel/header_sidebar/header_siderbar.php'?>

        <div id="page-wrapper">
            <div class="row">
                
                <div class="col-lg-12">
                    <h2 class="page-header">Εισαγωγή Δίκλινων Δωματίων</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                
               
        <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];unset($_SESSION['msg']); }?>            
                
  
      
       
                
                <div class="col-lg-12">
                      <form role="form" action="/AdminPanel/sumbit/doubleRoomForm"  enctype="multipart/form-data" method="post">
                         
                           <div class="form-group">
                                            <label>Όνομα Ξενοδοχείου</label>
                                            <select class="form-control" name="hotel_id" >
                                                <?php for($i = 0; $i<count($this->vars); $i++):?>
                                                   
                                            <?php $sum=$i+1 ?>
                                         
                                                
                                               <?php echo "<option value=". $sum .">".$this->vars[$i]["hotelname"]."</option>" ?>
                                                
                                                
                                                
                                                
                                            
                                                
                                                <?php endfor ?>
                                            </select>
                         
                         
                                        </div>
                          
                          
                          
                          
                                       
                           <div class="form-group">
                                            <label>Μέγεθος Δωματίου (τ.μ)</label>
                                            <input class="form-control" name="roomSize" required>
                                          
                                        </div>
                                        
                                       
                            <div class="form-group">
                                            <label>Περιγραφή</label>
                                          <textarea class="form-control" rows="5" name="description"></textarea>
                                           
                                        </div>
                          
                            <div class="form-group" >
                                
                                <div class="row">
                                    
                                    <div class="col-sm-2">
                                    <label>Υπηρεσίες (προεραιτικές)</label>
                                        <br>
                                            <button type="button" class="btn btn-success btn-circle addButtn"> +  </button>
                                         <button type="button" class="btn btn-danger btn-circle removeButtn"><i class="fa fa-times"></i></button>
                                    </div>
                                     
                                           
                                </div>
                                
                                <br>
                                
                                
                               
                              
                                
                                <div class="row servicesDiv">
                                
                                  
                                
                                
                                </div>
                               
                                
                            
                                 
                                
                                
                                
                                
                                           
                                        </div>
                          <div class="row">
                                    
                                    <div class="col-sm-6">
                                    <label>Περιέχει</label>
                                        <br>
                                                                    <div class="form-check">
  <input class="form-check-input" type="radio" name="contain" id="exampleRadios2" value="2 Μονά Κρεβάτια">
  <label class="form-check-label" for="exampleRadios2">
    2 Μονά Κρεβάτια
  </label>
                              <input class="form-check-input" type="radio" name="contain" id="exampleRadios2" value="1 Διπλό Κρεβάτι">
  <label class="form-check-label" for="exampleRadios2">
   1 Διπλό Κρεβάτι
  </label>
</div>
                                    </div>
                                     
                                           
                                </div>
                          
 
                          <br>
                        
                                  
                           <div class="form-group">
                                            <label>Ανέβασμα Φωτογραφιών</label>
                                           <input  name="fileToUpload[]" multiple="multiple"  type="file">
                                        </div>
                          
                          
                          
                          
                          
                                        <button type="submit" class="btn btn-default" name="submit">Αποθήκευση</button>
                                       
                                    </form>
                </div>
                
                
                <!-- /.col-lg-12 -->
            </div>
            <br>
   
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    <!-- jQuery -->
    <script src="/views/AdminPanel/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/views/AdminPanel/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/views/AdminPanel/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/views/AdminPanel/vendor/raphael/raphael.min.js"></script>
    <script src="/views/AdminPanel/vendor/morrisjs/morris.min.js"></script>
    <script src="/views/AdminPanel/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/views/AdminPanel/dist/js/sb-admin-2.js"></script>
    
    
    <script>
    $(".addButtn").click(function(){
               
 
        
  $form = $('<div class=col-lg-2 style=padding:10px;>');
         $form.append('  <input class=form-control placeholder=Υπηρεσία name=services[]>') 
          $form.append('  </div>') 
        
        
         
                
        
$('.servicesDiv').append($form);
       
        

        
    });
        
        
        $(".removeButtn").click(function(){
            
            $(".servicesDiv").empty();
            
            
        });
    
    
    </script>
    
</body>

</html>
