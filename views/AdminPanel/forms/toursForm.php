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
                    <h2 class="page-header">Εισαγωγή Εκδρομών</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                
               
        <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];unset($_SESSION['msg']); }?>            
                
  
      
       
                
                <div class="col-lg-12">
                      <form role="form" action="/AdminPanel/sumbit/toursForm"  enctype="multipart/form-data" method="post">
                         
                           <div class="form-group">
                                            <label>Όνομα Γραφείου</label>
                                            <select class="form-control" name="officeId" >
                                                <?php for($i = 0; $i<count($this->vars); $i++):?>
                                                   
                                            <?php $sum=$i+1 ?>
                                         
                                                
                                               <?php echo "<option value=". $sum .">".$this->vars[$i]["name"]."</option>" ?>
                                                
                                                
                                                
                                                
                                            
                                                
                                                <?php endfor ?>
                                            </select>
                         
                         
                                        </div>
                          
                          
                          
                          
                                       
                           <div class="form-group">
                                          <label>Αφετηρία</label>
                                            <input class="form-control" name="start" required>
                                          
                                        </div>
                                        
                                       
                            <div class="form-group">
                                            <label>Προορισμό</label>
                                          <input class="form-control" name="destination" required>
                                           
                                        </div>
                                   
                            <div class="form-group">
                                           <label>Ημμ-Ωρα/Αναχ</label>
                                          <input class=" form-control" type=datetime-local name="departure_date">
                                           
                                        </div>
                          
                          <div class="form-group">
                                           <label>Ημμ/Ωρα/Επιστρ</label>
                                        <input class=" form-control" type=datetime-local name="back_date">
                                           
                                        </div>
                          
                          
                          
                         
                          
                          
                            <div class="form-group">
                                            <label>Ημερ/Χρέωση</label>
                                        <input class="form-control" name="price" required>
                                           
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
