<?
session_start();

if(!isset( $_SESSION['UUID']))
{
    header('Location: '.'index.html');

}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Cleverflow | México</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery.circliful.css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.circliful.min.js"></script>
        <link rel="stylesheet" href="css/responsive-tables.css" />
        

    </head>
    <body class="login-bg">

        <div id="wrapper">
             <? include 'layout/top.php'; ?>
                <div class="row">

                        <div class="medium-12 columns">
                            <div class="nav-referral">
                                 <div class="p5 active"><a href="referral.php">Programa</a></div>
                                <div class="p1"><a href="referral-ganancias.php">Resultados</a></div>
                            </div>
                        </div><!--reg-bg-->

                </div>   
                
                <div class="row">
                
                 <div class="large-6 columns">
                            <div class="referral-page">
                            <h1>Referral program</h1>
                            <span>Descripción:</span>
                            <p>Programa de refenrencia en el que puedes ganar dinero invitando a tu amigos y conocidos. Solo Comparte el código y pide que cuando se registren lo introduzcan en la forma de registro.</p>
                            
                            </div>
                        </div><!--reg-bg-->
                 <div class="large-6 columns">
                            <div class="referral-page margin-l">
                            <h2>Código de referencia</h2>
                            <span class="promocode" id="code"></span>
                            <h2>Estado del programa</h2>
                            <span class="activo" id="status"></span>
                            </div>
                        </div><!--reg-bg-->
                </div>
                <div class="row">
                
                    <div class="large-12 columns">
                        <div class="referral-page">
                            <span>Posibles ganancias:</span>
                            <table class="tabla-referral" id="tableReferral">
                                
                               
                            </table>
                        </div>
                    </div><!--reg-bg-->
                </div>
           <div class="footer">
                    <div class="f-left">
                        <ul>
                            <li><a href="#">Preguntas frecuentes</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Aviso de privacidad</a></li>
                            <li><a href="#">Legales</a></li>
                            
                        </ul>
                        
                        
                    </div>
                <div class="f-right">
                            <div class="f-social">
                                <ul>
                                    <li><a href class="tw"></a></li>
                                    <li><a href class="fb"></a></li>
                                    <li><a href class="ig"></a></li>
                                </ul>
                            </div>
                            <div class="f-logo"></div>
                        </div>
                <div class="copyright">Copyright © 2012 - 2013 de Cleverflow de México S.A.P.I. de C.V.</div>
                </div>
            </div><!--dash-->  
            </div><!--Wraper-->
            
            <script src="js/vendor/jquery.js"></script>
            <script src="js/foundation.min.js"></script>
            <script src="js/circle.js"></script>
            <script>
                $(document).foundation();
                
                // Get Referral Campaign Summary (GET http://cleverflowcoreapi.azurewebsites.net/api/influencers/get_referral_campaign_summary)
                 $(function() {
                    
                    jQuery.ajax({
                        url: "php/getreferralSummary.php",
                        type: "GET",
                        data: {
                            "id":"<? echo $_SESSION["UUID"]?>",
                        }
                    })
                    .done(function(data, textStatus, jqXHR) {
                        res= JSON.parse(data);
                        console.log(res);
                        tableStr="<thead><tr><th>Concepto</th> <th width=\"150\">Ganancias</th></tr></thead><tbody>";
                        $("#code").html(res.response_object.referal_code);
                        
                        
                        res.response_object.possible_earnings.forEach(function(entry) {
                            tableStr=tableStr+" <tr> <td>"+entry.description+"</td><td>$ "+entry.possible_earning+" MXN</td></tr>"
                        });
                        tableStr=tableStr+"</tbody>";
                        $("#tableReferral").html(tableStr);
                        if (res.response_object.campaign_status == 0) {
                            $("#status").html("Activo");
                        }else{
                            
                            $("#status").html("Inactivo");
                            $("#status").css("color","red");
                        }
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log("HTTP Request Failed");
                    })
                    .always(function() {
                        /* ... */
                    });
                    
                    });
                    

            </script>   
    </body>
</html>
