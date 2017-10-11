<?
session_start();
require 'php/timeout.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <title>Cleverflow | España</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery.circliful.css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.circliful.min.js"></script>

    </head>
    <body class="login-bg">

        <div id="wrapper">

           <?include 'layout/top.php';
      ?>
                              
                <div class="row padding-50">
                    <div class="large-12 columns">
                        <div class="w1 full">
                             <div class="earn-tit euroicon">Pagos</div>       
                             <div class="earn-up">Saldo total<span>0 € </span></div>
                             <div class="earn-up">Saldo disponible<span>0 € </span></div>
                     </div>
                    </div>
                </div><!--row-->
                      
                 <div class="row">
                    <div class="large-12 columns">
                        <div class="pay-box">
                            <!--<div class="pay-row">
                                <div class="pay-info"><span>Concepto: </span>Haz sandwich</div>
                                 <div class="pay-info small"><span>Monto: </span>$ 4,340.00</div>
                                 <div class="pay-info small"><span>Tipo: </span> <span class="cobro">Cobro</span></div>
                                 <div class="pay-info last"><span>Fecha: </span>15-03-15</div>
                            </div> 
                            <div class="pay-row">
                                <div class="pay-info"><span>Concepto: </span>Haz sandwich</div>
                                 <div class="pay-info small"><span>Monto: </span>$ 4,340.00</div>
                                 <div class="pay-info small"><span>Tipo: </span><span class="cobro">Cobro</span></div>
                                 <div class="pay-info last"><span>Fecha: </span>15-03-15</div>
                            </div> 
                            <div class="pay-row">
                                <div class="pay-info"><span>Concepto: </span>Haz sandwich</div>
                                 <div class="pay-info small"><span>Monto: </span>$ 4,340.00</div>
                                 <div class="pay-info small"><span>Tipo: </span><span class="pago">Pago</span></div>
                                 <div class="pay-info last"><span>Fecha: </span>15-03-15</div>
                            </div> 
                            <div class="pay-row">
                                <div class="pay-info"><span>Concepto: </span>Haz sandwich</div>
                                 <div class="pay-info small"><span>Monto: </span>$ 4,340.00</div>
                                 <div class="pay-info small"><span>Tipo: </span><span class="cobro">Cobro</span></div>
                                 <div class="pay-info last"><span>Fecha: </span>15-03-15</div>
                            </div> 
                            <div class="pay-row">
                                <div class="pay-info"><span>Concepto: </span>Haz sandwich</div>
                                 <div class="pay-info small"><span>Monto: </span>$ 4,340.00</div>
                                 <div class="pay-info small"><span>Tipo: </span><span class="cobro">Cobro</span></div>
                                 <div class="pay-info last"><span>Fecha: </span>15-03-15</div>
                            </div> 
                            <div class="pay-row">
                                <div class="pay-info"><span>Concepto: </span>Haz sandwich</div>
                                 <div class="pay-info small"><span>Monto: </span>$ 4,340.00</div>
                                 <div class="pay-info small"><span>Tipo: </span><span class="pago">Pago</span></div>
                                 <div class="pay-info last"><span>Fecha: </span>15-03-15</div>
                            </div> -->
                           
                     </div>
                    </div>
                </div><!--row-->
                
                
        
               
            </div><!--dash-->
             <? include 'layout/footer.php' ?>
        </div><!--Wraper-->

        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/circle.js"></script>
        <script>
            $(document).foundation();
        </script>   
    </body>
</html>
