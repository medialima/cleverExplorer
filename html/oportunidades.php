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

    </head>
    <body class="login-bg">

       <? include 'layout/top.php'; ?>
                <div class="row">

                        <div class="medium-12 columns">
                             <div class="nav-profile2 opo">
                                <ul>
                                    <li class="p12 active"><a href="#">Twitter</a></li>
                                    <li class="p12"><a href="#">Facebook</a></li>
                                    <li class="p12"><a href="#">Instagram</a></li>
                                    <li class="p12"><a href="#">Otros</a></li>
                                </ul>
                            </div>
                        </div><!--reg-bg-->

                </div>    
            <div class="row">
                <div class="large-12 columns">   
                    
                    <div class="w9">
                        <div class="op-tit">
                            <span>Oportunidades</span> 
                           
                            <select id="" class="select-seven small">
                                    <option value="">Periodo</option>
                                    <option value="">Mes</option>
                                    <option value="">Semana</option>
                                    <option value="">Año</option>
                                    <option value="">Todas</option>
                            </select>
                            <select id="" class="select-seven small">
                                    <option value="">Perfil</option>
                                    
                            </select>
                            <select id="" class="select-seven small">
                                    <option value="">Estado</option>
                                    <option value="">Activa</option>
                                    <option value="">Finalizadas</option>
                                   
                            </select>
                             <select id="" class="select-seven">
                                    <option value="">Tipo de campaña</option>
                                    <option value="">Costo por click</option>
                                    <option value="">Influencia</option>
                                 </select>
                        </div>
                        
                    </div>
                    <div class="row bot-40">
                        
                        <div class="large-3 medium-6 small-12 centered column">
                            <div class="opo-box">
                                <div class="opo-head"></div>
                                <div class="opo-earn">Nestle</div>
                                <div class="opo-tit">Comete un snickers ahora mismo</div>
                                <div class="opo-earn">Gana: <span>$ 3,600.00</span></div>
                                <div class="opo-excerpt">Aqui puede encontrar una pequeña descripción del la campaña habría que calcular los caracteres tomando en...</div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 small-12 column">
                            <div class="opo-box">
                                <div class="opo-head"></div>
                                <div class="opo-earn">Nestle</div>
                                <div class="opo-tit">Comete un snickers</div>
                                <div class="opo-earn">Gana: <span>$ 3,600.00</span></div>
                                <div class="opo-excerpt">Aqui puede encontrar una pequeña descripción del la campaña habría que calcular los caracteres tomando en...</div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 small-12 column">
                            <div class="opo-box">
                                <div class="opo-head"></div>
                                <div class="opo-earn">Nestle</div>
                                <div class="opo-tit">Comete un snickers</div>
                                <div class="opo-earn">Gana: <span>$ 3,600.00</span></div>
                                <div class="opo-excerpt">Aqui puede encontrar una pequeña descripción del la campaña habría que calcular los caracteres tomando en...</div>
                            </div>
                        </div>
                        <div class="large-3 medium-6 small-12 column">
                            <div class="opo-box">
                                <div class="opo-head"></div>
                                <div class="opo-earn">Nestle</div>
                                <div class="opo-tit">Comete un snickers</div>
                                <div class="opo-earn">Gana: <span>$ 3.00 / Click</span></div>
                                <div class="opo-excerpt">Aqui puede encontrar una pequeña descripción del la campaña habría que calcular los caracteres tomando en...</div>
                            </div>
                        </div>

                    </div>
                </div><!--colums-->
            </div><!--row-->
            
            
          
                    
            </div><!--dash-->  
            <div class="footer">
                <div class="footer-wrap">
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
            </div>
            </div><!--Wraper-->
            
            <script src="js/vendor/jquery.js"></script>
            <script src="js/foundation.min.js"></script>
            <script src="js/circle.js"></script>
            <script>
                $(document).foundation();
            </script>   
             <script>
$( document ).ready(function() {
        $('#myStat').circliful();
        $('#myStat2').circliful();
	$('#myStat3').circliful();
	$('#myStat4').circliful();
    });
$(document).ready(function(){
	$('#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
</script>
    </body>
</html>
