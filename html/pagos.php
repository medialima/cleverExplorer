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

    </head>
    <body class="login-bg">

        <div id="wrapper">

             <?include 'layout/top.php';
			  include 'layout/submenu.php';
			?>

             
                              
                <div class="row margin-30">
                    <div class="large-12 columns">
                      <h1>Relación con Cleverflow</h1> 
                    </div>
                </div><!--row-->
                      
                <!-- <div class="row">
                    <div class="large-12 columns">
                        <div class="wrap-20">
                        <input type="radio">
                        <label class="full-label">¿Tu relación fiscal con Cleverflow España S.L. será como “Persona Física” que no cotiza en el Régimen Especial de la Seguridad Social (re
                         gimen de autónomos)? Independientemente de que te encuentres trabajando y cotizando en el Régimen General de la Seguridad Social co
                         mo trabajador por cuenta ajena.</label>
                        </div>
                     </div>
                     <div class="large-12 columns">
                         <div class="wrap-20">
                        <input type="radio">
                        <label class="full-label">¿Tu relación fiscal con Cleverflow España S.L. será como Persona Física que se encuentra dada de alta en el Régimen Especial de la S
eguridad Social (autónomos)?</label>
                        </div>
                      </div>
                     <div class="large-12 columns">
                         <div class="wrap-20">
                        <input type="radio">
                        <label class="full-label">¿Tu relación con Cleverflow España S.L. será como Persona Juridica (empresa) en cualquier modalidad (SL, SA, CB, etc)?</label>
                     </div>
                    </div>
                      <div class="separator"></div> 
                </div><!--row-->
              
                <div class="row margin-30">
                    <h5>Datos fiscales</h5>
                    <div class="large-12 columns">

                                <div class="input-box">
                                    <div class="wrap">
                                    <input id="nombre" type="text" placeholder="Nombre" name="nombre" class="in220">
                                    <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div>
                            
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="apellidoPat" type="text" name="apellidoPat" placeholder="Apellido Paterno" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                     </div>
                                </div>
                            
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="apellidoMat" type="text" name="apellidoMat" placeholder="Apellido Materno" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="dni" type="text" name="dni" placeholder="DNI" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="calle" type="text" placeholder="Calle" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="num" type="text" placeholder="Número exterior" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="numInt" type="text" placeholder="Número interior" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="cp" type="text" placeholder="Código postal" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                        <div class="input-box">
                                <div class="wrap">
                            <select id="estado" class="select-two">
                                
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                        <div class="input-box">
                                <div class="wrap">
                            <select id="municipio" class="select-two">
                              
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                       
                               <div class="input-box">
                                <div class="group">
                                <input type="checkbox" class="incheck" name="residente">
                                <span class="check-label">El receptor es persona NO residente en España</span>
                               </div>
                            </div>
                          
                    </div>
                </div>
            <!--    <div class="row margin-30">
                    <h5>Datos fiscales</h5>
                    <div class="large-12 columns">

                                <div class="input-box">
                                    <div class="wrap">
                                    <input id="razon" type="text" placeholder="Razón social" class="in220">
                                    <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div>
                            
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="identificacion" type="text" placeholder="Identificación Fiscal" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                     </div>
                                </div>                         
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="calle2" type="text" placeholder="Calle" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="numExt2" type="text" placeholder="Número exterior" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="numInt2" type="text" placeholder="Número interior" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                                <div class="input-box">
                                    <div class="wrap">
                                     <input id="cp2" type="text" placeholder="Código postal" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                        <div class="input-box">
                                <div class="wrap">
                            <select id="estado2" class="select-two">
                                
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                        <div class="input-box">
                                <div class="wrap">
                            <select id="municipio2" class="select-two">
                               
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                    </div>
                </div>-->
                
                <div class="row margin-30">
                    
                    <h6>Deseas recibir los pagos de tu actividad a través de:</h6>
                    <div class="large-12 columns">
                        <div class="wrap-20">
                        <input type="radio" name="tipoPago" checked>
                        <label class="full-label">Transferencia interbancaria (recomendado)</label>
                        </br>
                        <input type="radio" name="tipoPago">
                        <label class="full-label" >Pago vía PayPal</label>
                        </div>
                    </div>
                </div>
                 <div class="row margin-30">
                    <div class="large-12 columns">
                    <div class="input-box">
                                <div class="wrap">
                            <select id="bancos" class="select-two">
                                <option value="">Institución bancaria</option>
                                <option value="1">Banamex</option>
                                <option value="2">Bancomer</option>
                                <option value="3">Santander</option>
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                        <div class="input-box">
                                    <div class="wrap">
                                     <input id="clabe" type="text" placeholder="Clabe interbancaria" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                        <div class="input-box">
                                    <div class="wrap">
                                     <input id="correo" type="text" placeholder="Correo de PayPal" class="in220">
                                     <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div> 
                      </div>
                     
                </div>
                
                
                <div class="row">
                    <div class="submit-reg-influencer">
                        <div class="right"><input type="submit" class="btn-four" value="Guardar cambios" id="send"></div>
                        <div class="right"><input type="submit" class="btn-five" value="Cancelar" id="cancel"></div>
                    </div>
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
                        url: "php/getEstado.php"
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $('#estado').html(data);
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
			
			$('#estado').change(function(e) {
                //Grab the chosen value on first select list change
                var selectvalue = $(this).val();
             
                //Display 'loading' status in the target select list
                $('#municipio').html('<option value="">Cargando...</option>');
             
                if (selectvalue == "") {
                    //Display initial prompt in target select if blank value selected
                   $('#municipio').html('<option value="">Ciudades*</option>');
                } else {
                  //Make AJAX request, using the selected value as the GET
                  $.ajax({url: 'php/getCiudad.php?svalue='+selectvalue,
                         success: function(output) {
                            //alert(output);
                            $('#municipio').html(output);
                        },
                      error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + " "+ thrownError);
                      }});
                    }
                });
			
			// Update Influencer Payment Info (PUT http://cleverflowcoreapi.azurewebsites.net/api/influencers/update_payment_information)
			 $( "#cancel" ).click(function() {
					event.preventDefault();
				 window.location.replace("dashboard.php");
				});
				  $( "#send" ).click(function() {
						residente = "0";
						if($("input[name=residente]:checked").is(":checked")){
							residente="1";
						}else{
							
							residente="0";
						}
						jQuery.ajax({
							url: "php/updatePaymentInfo.php",
							type: "POST",
							data: {
								"address_state_id": $("#calle").val(),
								"european_bank_account": $("#clabe").val(),
								"address_zip_code": $("#cp").val(),
								"paypal_mail_address": $("#correo").val(),
								"company_name": "a",
								"last_name_2": $("#apellidoMat").val(),
								"relationship_type": 1,
								"last_name_1": $("#apellidoPat").val(),
								"link_names": "1",
								"uuid": "<?echo $_SESSION["UUID"]?>",
								"financial_institution_id":$( "#bancos option:selected" ).val(),
								"fiscal_id": $("#dni").val(),
								"name": $("#nombre").val(),
								"address_internal_number": $("#numInt").val(),
								"payment_method": $('input[name=tipoPago]:checked').val(),
								"address_municipality_id": $( "#municipio option:selected" ).val(),
								"address_external_number": $("#num").val(),
								"is_country_resident": residente,
								"mexican_bank_account": $("#clabe").val(),
								"address_street": $("#calle").val(),
							}
						})
						.done(function(data, textStatus, jqXHR) {
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
