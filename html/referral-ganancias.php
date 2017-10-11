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
        <script src="js/responsive-tables.js"></script>
    </head>
    <body class="login-bg">

        <div id="wrapper">
            <? include 'layout/top.php'; ?>
                <div class="row">

                        <div class="medium-12 columns">
                            <div class="nav-referral">
                                <div class="p1"><a href="referral.php">Programa</a></div>
                                <div class="p5 active"><a href="referral-ganancias.php">Resultados</a></div>
                            </div>
                        </div><!--reg-bg-->

                </div>   
                
                <div class="row">
                
                 <div class="large-12 columns">
                            <div class="referral-page">
                            <h1>Ganacias obtenidas:</h1>
                            <span class="activo" id="ganancias"></span>
                            </div>
                        </div><!--reg-bg-->
                </div>
                <div class="row">
              
                    <div class="large-12 columns">
                        <div class="referral-page">
                            <h4>Usuarios registrados:</h4>
                            <table class="tabla-referral" id="tablaUsr">
                               
                                    <tr>
                                        <td>@pastorcillo</td>
                                        <td>11,450</td>
                                        <td>$ 10 MXN</td>
                                        <td>Twitter</td>
                                    </tr>
                                    <tr>
                                        <td>@pastorcillo</td>
                                        <td>11,450</td>
                                        <td>$ 10 MXN</td>
                                        <td>Twitter</td>
                                    </tr>
                                    <tr>
                                        <td>@pastorcillo</td>
                                        <td>11,450</td>
                                        <td>$ 10 MXN</td>
                                        <td>Twitter</td>
                                    </tr>
                                    <tr>
                                        <td>@pastorcillo</td>
                                        <td>11,450</td>
                                        <td>$ 10 MXN</td>
                                        <td>Twitter</td>
                                    </tr>
                                </tbody>
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
                 $(function() {
                    
                    jQuery.ajax({
                        url: "php/getreferralResults.php",
                        type: "GET",
                        data: {
                            "id":"<? echo $_SESSION["UUID"]?>",
                        }
                    })
                    .done(function(data, textStatus, jqXHR) {
                        res= JSON.parse(data);
                        console.log(res);
                        tableStr='<thead><tr><th width="200">Usuarios</th><th width="200">Followers</th> <th width="150">Ganancias</th><th width="150">Red</th></tr></thead><tbody>';
                        $("#ganancias").html("$"+res.response_object.total_earnings + "MXN");
                        
                        
                        res.response_object.referred_profiles.forEach(function(entry) {
                            tableStr=tableStr+" <tr> <td>"+entry.referred_username+"</td><td>"+entry.referred_audience+"</td><td>$"+entry.referred_profit+" MXN</td><td>"+entry.referred_network_name+"</td></tr>"
                        });
                        tableStr=tableStr+"</tbody>";
                        $("#tablaUsr").html(tableStr);
                       
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
