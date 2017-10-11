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
                    <div class="large-12 columns">
						<div class="sn-name">
							<div class="avatar" id="avatar">  </div>
							<h1 id="screenName"></h1>
						</div>
						<div style="margin-top: 108px; margin-left: 3px;"><p style="font-size: .8rem; margin-bottom: 0;">**Los datos que pedidmos a continucion son estimaciones que serán utilizados mientras se calcula los valores reales de tu cuenta.</p></div>
					</div>
					</div>
				<form action="php/upDateAccount.php" id="formRedes" method="POST">
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


                            <div class="audc-lbl">Porcentaje estimado del género</div>
                            <div class="center">  

                                <div class="full-box">
                                    <div class="gno-wrap">
                                        <label for="">Masculino</label>
                                        <select id="masculino" name="masc" class="select-one">
                                            <option value="0">0%</option>
											<option value="0.1">10%</option>
											<option value="0.2">20%</option>
											<option value="0.3">30%</option>
											<option value="0.4">40%</option>
											<option value="0.5">50%</option>
											<option value="0.6">60%</option>
											<option value="0.7">70%</option>
											<option value="0.8">80%</option>
											<option value="0.9">90%</option>
											<option value="1">100%</option>                                                      
                                        </select>                               
                                        <span class="input-alert" id="errorSexo"style="display:none; color: red;">La suma debe dar 100%</span>
                                    </div>
                                    <div class="gno-wrap">
                                        <label for="">Femenino</label>
                                        <select id="femenino" name="fem" class="select-one">
                                            <option value="0">0%</option>
											<option value="0.1">10%</option>
											<option value="0.2">20%</option>
											<option value="0.3">30%</option>
											<option value="0.4">40%</option>
											<option value="0.5">50%</option>
											<option value="0.6">60%</option>
											<option value="0.7">70%</option>
											<option value="0.8">80%</option>
											<option value="0.9">90%</option>
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
                                        <option value="0.1">10%</option>
										<option value="0.2">20%</option>
										<option value="0.3">30%</option>
										<option value="0.4">40%</option>
										<option value="0.5">50%</option>
										<option value="0.6">60%</option>
										<option value="0.7">70%</option>
										<option value="0.8">80%</option>
										<option value="0.9">90%</option>
										<option value="1">100%</option>                                                       
                                    </select>                               
                                    <span class="input-alert" id="errorEdad" style="display:none; color: red;">La suma debe dar 100%</span>
                                </div>
                                <div class="audc-wrap">
                                    <label for="edad">18-25</label>
                                    <select id="edad2" name="edad2" class="select-one">
                                        <option value="0">0%</option>
                                        <option value="0.1">10%</option>
										<option value="0.2">20%</option>
										<option value="0.3">30%</option>
										<option value="0.4">40%</option>
										<option value="0.5">50%</option>
										<option value="0.6">60%</option>
										<option value="0.7">70%</option>
										<option value="0.8">80%</option>
										<option value="0.9">90%</option>
										<option value="1">100%</option>                                             
                                    </select>                               
                                    <span class="input-alert" style="display:none">Requerido</span>
                                </div>                                                     
                                <div class="audc-wrap">
                                    <label for="edad">26-35</label>
                                    <select id="edad3" name="edad3" class="select-one">
										<option value="0">0%</option>
                                        <option value="0.1">10%</option>
										<option value="0.2">20%</option>
										<option value="0.3">30%</option>
										<option value="0.4">40%</option>
										<option value="0.5">50%</option>
										<option value="0.6">60%</option>
										<option value="0.7">70%</option>
										<option value="0.8">80%</option>
										<option value="0.9">90%</option>
										<option value="1">100%</option>                                           
                                    </select>                               
                                    <span class="input-alert" style="display:none"> </span>
                                </div>
                                <div class="audc-wrap">
                                    <label for="edad">36+</label>
                                    <select id="edad4"  name="edad4" class="select-one">
										<option value="0">0%</option>
										<option value="0.1">10%</option>
										<option value="0.2">20%</option>
										<option value="0.3">30%</option>
										<option value="0.4">40%</option>
										<option value="0.5">50%</option>
										<option value="0.6">60%</option>
										<option value="0.7">70%</option>
										<option value="0.8">80%</option>
										<option value="0.9">90%</option>
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
                                    <textarea class="full-comment" id="desc" name="desc"></textarea>
                                </div>

                        </div><!--boxtype-->                                               
                    </div><!--12 colum--->
                </div> <!--Row-->
				<input type="hidden" name="twitterId" value="<? echo $_GET['red'];  ?>" />
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
			
			jQuery.ajax({
				url: "php/getDataAccount.php?id=<? echo $_GET['red'];  ?>"
			})
			.done(function(data, textStatus, jqXHR) {
				res= JSON.parse(data);
				console.log(res);
				
				$('#interes option[value="'+res.response_object.interests[0].id+'"]').attr('selected', 'selected');
				$('#interes2 option[value="'+res.response_object.interests[1].id+'"]').attr('selected', 'selected');
				$('#interes3 option[value="'+res.response_object.interests[2].id+'"]').attr('selected', 'selected');
				 $('input[name="genero"][value="'+res.response_object.gender_id+'"]').attr('checked', 'checked');
				$('#masculino option[value="'+res.response_object.infl_per_men+'"]').attr('selected', 'selected');
				$('#femenino option[value="'+res.response_object.infl_per_women+'"]').attr('selected', 'selected');
				$('#edad1 option[value="'+res.response_object.infl_per_u18+'"]').attr('selected', 'selected');
				$('#edad2 option[value="'+res.response_object.infl_per_1825+'"]').attr('selected', 'selected');
				$('#edad3 option[value="'+res.response_object.infl_per_2635+'"]').attr('selected', 'selected');
				$('#edad4 option[value="'+res.response_object.infl_per_o35+'"]').attr('selected', 'selected');
				$('#desc').text(res.response_object.own_description);
				$('#screenName').text(res.response_object.social_user_name);
				$('#avatar').html('<img src="'+res.response_object.profile_picture_url+'"alt="avatar"> ');
				
				evalSex();
				evalIntereses();
				evalEdad();
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
