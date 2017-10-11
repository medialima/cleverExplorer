<?php 
session_start();

if(!isset( $_SESSION['UUID']))
{
    header('Location: '.'../index.html');

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
		<script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="css/sweetalert.css" />

    </head>
    <body class="login-bg">

        <?
			   include 'layout/top.php';
			  
			   ?>
                <div class="row">

                       <div class="medium-12 columns">
                            
                            <div class="nav-profile2">
                                <ul>
                                    <li class="p12"><a href="cuentas.php">Redes sociales</a></li>
                                    <li class="p12"><a href="perfil.php">Perfil</a></li>
                                    <li class="p12"><a href="seguridad.php">Seguridad</a></li>
                                    <li class="p12"><a href="#">Pagos</a></li>
                                    <li class="p12"><a href="transacciones.html">Operaciones</a></li>
                                </ul>
                               
                            </div>
                        </div><!--reg-bg-->

                </div>  
					<div class="row">
                    <div class="large-12 columns">
						<div class="sn-name">
							<div class="avatar"> <!--<img src="img/pena.jpg"alt="pena"> -->  </div>
							<h1><?echo $_SESSION['screen_name'] ?></h1>
						</div>
						<div style="margin-top: 108px; margin-left: 3px;"><p style="font-size: .8rem; margin-bottom: 0;">**Los datos que pedidmos a continucion son estimaciones que serán utilizados mientras se calcula los valores reales de tu cuenta.</p></div>
					</div>
					</div>
				<form action="php/setAccount.php" id="formRedes" method="POST">
                <div class="row margin-30">
                    <div class="large-12 columns">   
                        <div class="perfil-wrap">
                            <div class="reg-tit six"><span class="reg-tit-span">Género</span></div>

                            <div class="input-box mid">
                                <div class="wrap middle">
                                    <label for="hombre">Hombre</label>
                                    <input type="radio" name="genero" id="hombre" value="1" checked>  
                                    <label for="mujer">Mujer</label>
                                    <input type="radio" name="genero" id="mujer" value="2">
									<label for="mujer">indeterminado</label>
                                    <input type="radio" name="genero" id="indeterminado" value="3">
                                    <span class="input-alert" style="display:none">Campo requerido</span>
                                </div>
                            </div>


                            <div class="reg-tit six"><span class="reg-tit-span">Porcentaje estimado del género</span></div>
                            <div class="center">  

                                <div class="full-box">
                                    <div class="gno-wrap">
                                        <label for="">Masculino</label>
                                        <select id="masculino" name="masc" class="select-one">
                                            <option value="0">0%</option>
											<option value=".10">10%</option>
											<option value=".20">20%</option>
											<option value=".30">30%</option>
											<option value=".40">40%</option>
											<option value=".50">50%</option>
											<option value=".60">60%</option>
											<option value=".70">70%</option>
											<option value=".80">80%</option>
											<option value=".90">90%</option>
											<option value="1">100%</option>                                                      
                                        </select>                               
                                        <span class="input-alert" id="errorSexo"style="display:none; color: red;">La suma debe dar 100%</span>
                                    </div>
                                    <div class="gno-wrap">
                                        <label for="">Femenino</label>
                                        <select id="femenino" name="fem" class="select-one">
                                            <option value="0">0%</option>
											<option value=".10">10%</option>
											<option value=".20">20%</option>
											<option value=".30">30%</option>
											<option value=".40">40%</option>
											<option value=".50">50%</option>
											<option value=".60">60%</option>
											<option value=".70">70%</option>
											<option value=".80">80%</option>
											<option value=".90">90%</option>
											<option value="1">100%</option>                                                        
                                        </select>  

                                        <span class="input-alert" style="display:none">Requerido</span>
                                    </div>
								<div id="sexoVal" class="cal-gender">0%</div> 		
                                </div>     <!--fullbox-->
                            </div><!--center-->

                        </div><!--reg-wrap-->
                    </div><!--colums-->
                </div><!--row-->
                <div class="row">
                    <div class="large-12 columns">   
                        <div class="perfil-wrap">
                            <div class="reg-tit four"><span class="reg-tit-span">Porcentaje estimado de edades de la cuenta</span></div>

                            <div class="center">                                           

                                <div class="audc-wrap">
                                    <label for="edad">-18</label>
                                    <select id="edad1" name="edad1" class="select-one">
                                        <option value="0">0%</option>
                                        <option value=".10">10%</option>
										<option value=".20">20%</option>
										<option value=".30">30%</option>
										<option value=".40">40%</option>
										<option value=".50">50%</option>
										<option value=".60">60%</option>
										<option value=".70">70%</option>
										<option value=".80">80%</option>
										<option value=".90">90%</option>
										<option value="1">100%</option>                                                       
                                    </select>                               
                                    <span class="input-alert" id="errorEdad" style="display:none; color: red;">La suma debe dar 100%</span>
                                </div>
                                <div class="audc-wrap">
                                    <label for="edad">18-25</label>
                                    <select id="edad2" name="edad2" class="select-one">
                                        <option value="0">0%</option>
                                        <option value=".10">10%</option>
										<option value=".20">20%</option>
										<option value=".30">30%</option>
										<option value=".40">40%</option>
										<option value=".50">50%</option>
										<option value=".60">60%</option>
										<option value=".70">70%</option>
										<option value=".80">80%</option>
										<option value=".90">90%</option>
										<option value="1">100%</option>                                             
                                    </select>                               
                                    <span class="input-alert" style="display:none">Requerido</span>
                                </div>                                                     
                                <div class="audc-wrap">
                                    <label for="edad">26-35</label>
                                    <select id="edad3" name="edad3" class="select-one">
										<option value="0">0%</option>
                                        <option value=".10">10%</option>
										<option value=".20">20%</option>
										<option value=".30">30%</option>
										<option value=".40">40%</option>
										<option value=".50">50%</option>
										<option value=".60">60%</option>
										<option value=".70">70%</option>
										<option value=".80">80%</option>
										<option value=".90">90%</option>
										<option value="1">100%</option>                                           
                                    </select>                               
                                    <span class="input-alert" style="display:none"> </span>
                                </div>
                                <div class="audc-wrap">
                                    <label for="edad">36+</label>
                                    <select id="edad4"  name="edad4" class="select-one">
										<option value="0">0%</option>
										<option value=".10">10%</option>
										<option value=".20">20%</option>
										<option value=".30">30%</option>
										<option value=".40">40%</option>
										<option value=".50">50%</option>
										<option value=".60">60%</option>
										<option value=".70">70%</option>
										<option value=".80">80%</option>
										<option value=".90">90%</option>
										<option value="1">100%</option>                                          
                                    </select>                               
                                    <span class="input-alert" style="display:none"></span>
                                </div><!--audc-wrap-->
								 
                               <div id="edadVal" class="cal-gender">0%</div> 
                              


                            </div><!--center-->
                        </div><!--reg-wrap-->
                    </div><!--colums-->
                </div>


                <div class="row">
                    <div class="large-12 columns">

                        <div class="boxtype-one">
                            <div class="reg-tit five">
                                <span class="reg-tit-span">Posibles interéses de la audiencia</span>
                            </div>

                            <div class="input-box">
                                <div class="wrap">
                                    <select id="interes" name="int1" class="select-five">
                                    </select>
                                    <span class="input-alert" style="display:none">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                    <select id="interes2" name="int2" class="select-five">
                                    </select>
                                    <span class="input-alert" style="display:none">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                    <select id="interes3" name="int3" class="select-five">
                                    </select>
                                    <span class="input-alert" style="display:none">Requerido</span>
                                </div>
                            </div>

                        </div><!--boxtype-->                                               
                    </div><!--12 colum--->
                </div> <!--Row-->
                <div class="row">
                    <div class="large-12 columns">

                        <div class="boxtype-one">
                            <div class="reg-tit five">
                                <span class="reg-tit-span">Descripción de la cuenta</span>
                            </div>

                                <div class="wrap-textarea">
                                    <textarea class="full-comment"></textarea>
                                </div>

                        </div><!--boxtype-->                                               
                    </div><!--12 colum--->
                </div> <!--Row-->
                <input type="hidden" name="accesToken" value="<? echo $_SESSION['oauthToken'];  ?>" />
				<input type="hidden" name="accesTokenSecret" value="<? echo $_SESSION['oauthSecret'];  ?>" />
				<input type="hidden" name="twitterId" value="<? echo $_SESSION['twitterId'];  ?>" />
                <div class="row">
                    <div class="submit-reg-influencer">
                        <div class="right"><input type="submit" id="submit"class="btn-four" value="Guardar cambios"></div>
                        <div class="right"><input type="submit" id="cancel"class="btn-five" value="Cancelar"></div>
                    </div>
                </div>
			</form>	
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
                </div><!--Footer-->
            </div><!--dash-->  
        </div><!--Wraper-->

        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/circle.js"></script>
        <script>
            $(document).foundation();
            // Get Catalogue by ID (GET http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id)
            $(function() {
				var sex = false;
				var edad = false;
				
			//$( "#submit" ).click(function( event ) {
			//	event.preventDefault();
			//	 if (sex&&edad) {
			//		$( "form" ).submit();
			//	 }else{
			//		
			//		alert ("errores en la forma");
			//	 }
			//	 
			//});
			$( "form" ).submit(function() {
				if (sex&&edad) {
					return true;
				 }else{
					
					swal("Oops", "Hay errores en la forma", "error");
					return false;
				 }
			});
			$( "#cancel" ).click(function( event ) {
				event.preventDefault();
				 window.location.replace("dashboard.php");
				 
			});
				
			function evalSex(){
				masc= parseFloat($('#masculino').val());
				fem = parseFloat($('#femenino').val());
				totalRaw= (masc+fem)*100;
				total= totalRaw.toFixed(2);
				$("#sexoVal").html(total+'%');
				
				if (total!=100) {
					$("#sexoVal").css("color","red");
					$("#errorSexo").css("display","inherit");
					sex= false;
				}else {
					$("#sexoVal").css("color","green");
					$("#errorSexo").css("display","none");
					sex= true;
				}
				
			}
			function evalIntereses(){
				masc= parseFloat($('#masculino').val());
				fem = parseFloat($('#femenino').val());
				totalRaw= (masc+fem)*100;
				total= totalRaw.toFixed(2);
				$("#sexoVal").html(total+'%');
				
				if (total!=100) {
					$("#sexoVal").css("color","red");
					$("#errorSexo").css("display","inherit");
					sex= false;
				}else {
					$("#sexoVal").css("color","green");
					$("#errorSexo").css("display","none");
					sex= true;
				}
				
			}
			function evalEdad(){
				edad1= parseFloat($('#edad1').val());
				edad2 = parseFloat($('#edad2').val());
				edad3 = parseFloat($('#edad3').val());
				edad4 = parseFloat($('#edad4').val());
				totalRaw= (edad1+edad2+edad3+edad4)*100;
				total= totalRaw.toFixed(2);
				$("#edadVal").html(total+'%');
				
				if (total!=100) {
					$("#edadVal").css("color","red");
					$("#errorEdad").css("display","inherit");
					edad= false;
				}else {
					$("#edadVal").css("color","green");
					$("#errorEdad").css("display","none");
					edad= true;
				}
				
			}
			$('#masculino').change(function(e) {
               
				evalSex();
	
			
			});
			$('#femenino').change(function(e) {
               
				evalSex();
			
			
			});
			$('#edad1').change(function(e) {
               
				evalEdad();
			
			
			});
			$('#edad2').change(function(e) {
               
				evalEdad();
			
			
			});
			$('#edad3').change(function(e) {
               
				evalEdad();
			
			
			});
			$('#edad4').change(function(e) {
               
				evalEdad();
				
			
			});
				
			jQuery.ajax({
				url: "php/getIntereses.php"
			})
			.done(function(data, textStatus, jqXHR) {
				$('#interes').html(data);
				$('#interes2').html(data);
				$('#interes3').html(data);
				console.log("HTTP Request Succeeded: " + jqXHR.status);
				console.log(data);
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
