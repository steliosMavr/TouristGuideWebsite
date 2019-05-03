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
                
                
                   
                <div class="col-lg-12">
                     <div class="form-group">
                                            <label>Όνομα Γραφείου</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                    
                    
                    <button type="button" id="addFormsButtn" class="btn  btn-default btn-block">Φόρμες Εκδρομών (+)</button>
                    <br><br>
                    
                    
                </div>
                
                <div class="col-lg-12">
                    
                 
                           <div class="panel panel-default">
                        <div class="panel-heading">
                            Φόρμα Εκδρομών
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="motoForms" style="padding:10px;">
                                 
                                   
                                    <p style="text-align:center;color:red;" class="msg"></p>
                                    
                                    
                                    
                                    
                                </div>
                              
                           
                            </div>
                            
                            <div class="sumbitButton">
                                
                            </div>
                            
                             
                        </div>
                               
                       
                    </div>
                </div>
                
                
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
    
     <script src="/views/AdminPanel/assets/tourForm.js"></script>
   

    
</body>

</html>
