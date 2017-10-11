<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1600)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
if(!isset( $_SESSION['UUID']))
{
    header('Location: '.'index.php?error=1');

}else{
   

    print_r($_SESSION['UUID']);
}


?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="libs/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" href="libs/css/estilo.css" />

</head>

<body>
  <section class="dash-section">
    <div class="row buscador-box mt10" id="toggler-r">
      <div class="critero-col col s3 rseparador">
        <h1>Criterios de búsqueda<a class="waves-effect waves-light agregar modal-trigger" href="#modal1"></a></h1>
        <!--<div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>
        <div class="caja-comun criterio-busqueda">Hola soy un criterio</div>-->
         <a class=" modal-action modal-close waves-effect waves-green btn-flat" id="search" >BUSCAR</a>

      </div> 
      <div class="col s9">
        <h1>Resultados</h1>
        <div class="row" id="profiles">
          
        </div>
        <!--FIN DE bloque -->
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="separador"></div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div id="toggler" class="btn-toggle">-</div>
      </div>
    </div>
    <div class="row contenido">
      <div class="col s3 rseparador" id="left-cont">
            <div id="info" class="ax_default image" data-label="View General Information" title="Información Personal">
              <img id="u144_img" class="img " src="images/dashboard__admin_/p2.png"/>
            </div>

            <!-- View Tags (Image) -->
            <div id="tags" class="ax_default image" data-label="View Tags" title="Tags">
              <img id="u145_img" class="img " src="images/dashboard__admin_/p3.png"/>
            </div>

            <!-- View Contact Information (Image) -->
            <div id="contact" class="ax_default image" data-label="View Contact Information" title="Información de Contacto">
              <img id="u146_img" class="img " src="images/dashboard__admin_/p5.png"/>
            </div>

            <!-- View Packages (Image) -->
            <div id="paquetes" class="ax_default image" data-label="View Packages" title="Paquetes">
              <img id="u147_img" class="img " src="images/dashboard__admin_/p7.png"/>
            </div>

            <!-- View Annotations (Image) -->
            <div id="annotations" class="ax_default image" data-label="View Annotations" title="Notas">
              <img id="u148_img" class="img " src="images/dashboard__admin_/p9.png"/>
            </div>

            <!-- View Brands (Image) -->
            <div id="brands" class="ax_default image" data-label="View Brands" title="Notas">
              <img id="u149_img" class="img " src="images/dashboard__admin_/p11.png"/>
            </div>
            <!-- View Selection (Image) -->
             <div id="selection" class="ax_default image" data-label="View Selection" title="Notas">
              <img id="u541_img" class="img " src="images/dashboard__admin_/p13.png"/>
            </div>

            <!-- View Payment Information (Image) -->
            <div id="payment" class="ax_default image" data-label="View Payment Information" title="Notas">
              <img id="u542_img" class="img " src="images/dashboard__admin_/p15.png"/>
            </div>

            <!-- View History (Image) -->
            <div id="history" class="ax_default image" data-label="View History" title="Notas">
              <img id="u543_img" class="img " src="images/dashboard__admin_/p17.png"/>
            </div>
        <div class="profile">
          <h1>'.profile.response_object[i].full_name.'</h1>
        </div>
        <div class="profile-cont" >
          <h5>Información General</h5>
          <p class="color-gris">
            Tipo de Influencer
          </p>
          <p class="color-azul">
            '.profile.response_object[i].influencer_type_id.'
          </p>
          <p class="color-gris">
            Fuente: '.profile.response_object[i].influencer_type_id_source.'
          </p>
          <p class="color-gris">
            Edad
          </p>
           <p class="color-azul">
           '.profile.response_object[i].reference_birth_date.'
          </p>
          <p class="color-gris">
            Fuente: '.profile.response_object[i].reference_birth_date_source.'
          </p>
           <p class="color-gris">
           Género
          </p>
           <p class="color-azul">
          '.profile.response_object[i].gender_id.'
          </p>
           <p class="color-gris">
           Fuente: '.profile.response_object[i].gender_id_source.'
          </p>
           <p class="color-gris">
           Pais de Residencia
          </p>
           <p class="color-azul">
           '.profile.response_object[i].country_id.'
          </p>
           <p class="color-gris">
          Fuente: '.profile.response_object[i].country_id_source.'
          </p>
          <p class="color-gris">
           Estado de Residencia
          </p>
           <p class="color-azul">
          '.profile.response_object[i].country_id.'
           <p class="color-gris">
            Fuente: '.profile.response_object[i].residence_state_id_source.'
          </p>
          <p class="color-gris">
            Influencia General
          </p>
           <p class="color-azul">
          '.profile.response_object[i].general_influence_score.'
          </p>
           <p class="color-gris">
            Fuente: '.profile.response_object[i].general_influence_score_source.'
          </p>
          <!--CONTACT CARD-->

        

          <!--END CONTACT CARD-->
        </div>
      </div>
      <div class="col s9">
        <!--contenido a 12 columnas o full-->
        <div class="row">
          <div class="col l12 m12 s12">
            <h1>Contenido a Fullwith</h1>
          </div>
        </div>
        <!--contenido a 6 columnas en cada columna o sea, 6 y 6-->
        <div class="row">
          <div class="col s12">
            <h1>Dos columnas</h1>
          </div>
          <div class="col l6 m6 s6">
            <p class="color-gris">
              Tipo de texto color gris
            </p>
            <p class="color-azul">
              tipo de texto color azul
            </p>
          </div>
          <div class="col l6 m6 s6">
            <p class="color-gris">
              Tipo de texto color gris
            </p>
            <p class="color-azul">
              tipo de texto color azul
            </p>
          </div>
        </div>
        <!--contenido a 4 columnas en cada columna o sea, 4,4 y 4-->
        <div class="row">
          <div class="col s12">
            <h1>Tres columnas</h1>
          </div>
          <div class="col l4 m4 s4">
            <p class="color-gris">
              Tipo de texto color gris
            </p>
            <p class="color-azul">
              tipo de texto color azul
            </p>
          </div>
          <div class="col l4 m4 s4">
            <p class="color-gris">
              Tipo de texto color gris
            </p>
            <p class="color-azul">
              tipo de texto color azul
            </p>
          </div>
          <div class="col l4 m4 s4">
            <p class="color-gris">
              Tipo de texto color gris
            </p>
            <p class="color-azul">
              tipo de texto color azul
            </p>
          </div>
          <!--contenido a 3 columnas en cada columna o sea, 3,3,3 y 3-->
          <div class="row">
            <div class="col s12">
              <h1>Cuatro columnsa</h1>
            </div>
            <div class="col l3 m3 s3">
              <p class="color-gris">
                Tipo de texto color gris
              </p>
              <p class="color-azul">
                tipo de texto color azul
              </p>
            </div>
            <div class="col l3 m3 s3">
              <p class="color-gris">
                Tipo de texto color gris
              </p>
              <p class="color-azul">
                tipo de texto color azul
              </p>
            </div>
            <div class="col l3 m3 s3">
              <p class="color-gris">
                Tipo de texto color gris
              </p>
              <p class="color-azul">
                tipo de texto color azul
              </p>
            </div>
            <div class="col l3 m3 s3">
              <p class="color-gris">
                Tipo de texto color gris
              </p>
              <p class="color-azul">
                tipo de texto color azul
              </p>
            </div>
          </div>
          <!--tabla--->
          <table class="bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Item Price</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Alvin</td>
                <td>$0.87</td>
              </tr>
              <tr>
                <td>Alan</td>
                <td>$3.76</td>
              </tr>
              <tr>
                <td>Jonathan</td>
                <td>$7.00</td>
              </tr>
            </tbody>
          </table>
          <!--FIN TABLA-->
          <!--CONTENIDOS-->
          <h1>Ejemplos de contenido</h1>
          <div class="contenido-box">
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
            <!--hexagono-->
            <div class="hexagono">
              <span class="hex__1">
                <span class="hex__2">
                  <span class="hex__3">
                    <span class="content_inner">
                      <img src="http://lorempixel.com/600x600" />
                    </span>
                  </span>
                </span>
              </span>
            </div>
            <!--hexagono-->
          </div>

          <!--FIN CONTENIDOS-->
        </div>
      </div>

      <!-- Modal Structure -->
      <!-- Modal Structure -->
      <!-- Modal Structure -->
      <!-- Modal Structure -->
      <!-- Modal Structure -->
      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h1>Selecciona los criterios</h1>
          <div class="row">
            <label>Soy el título del select</label>
            <select class="browser-default">
        <option value="" disabled selected>Seleccionar</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
          </div>
          <div class="row">
            <label>Soy el título del select</label>
            <select class="browser-default">
       <option value="" disabled selected>Seleccionar</option>
       <option value="1">Option 1</option>
       <option value="2">Option 2</option>
       <option value="3">Option 3</option>
     </select>
          </div>
          <div class="row">
            <label>Soy el título del select</label>
            <select class="browser-default">
      <option value="" disabled selected>Seleccionar</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
          </div>
          <div class="row">
            <label>Soy el título del select</label>
            <select class="browser-default">
     <option value="" disabled selected>Seleccionar</option>
     <option value="1">Option 1</option>
     <option value="2">Option 2</option>
     <option value="3">Option 3</option>
   </select>
          </div>
          <div class="row">
            <label>Soy el título del select</label>
            <select class="browser-default">
    <option value="" disabled selected>Seleccionar</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
          </div>
          <div class="row">
            <label>Soy el título del select</label>
            <select class="browser-default">
    <option value="" disabled selected>Seleccionar</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
          </div>
        </div>
        <div class="modal-footer">
          <a class=" modal-action modal-close waves-effect waves-green btn-flat">BUSCAR</a>
        </div>
      </div>
  </section>
  <!--<footer class="page-footer">
		<div class="row pie">
				<div class="col s12 m3" id="redes">
						<div class="col s3">
								<img src="libs/img/u155.svg" alt="" width="100%">
						</div>
						<div class="col s3">
								<img src="libs/img/u157.svg" alt="" width="100%">
						</div>
						<div class="col s3">
								<img src="libs/img/u159.svg" alt="" width="100%">
						</div>
						<div class="col s3">
								<img src="libs/img/u161.svg" alt="" width="100%">
						</div>
				</div>
				<div class="col s12 m6 center" id="footCenter">
						<div class="col s12 m6">
								<a href="#" class="white-text">T&eacute;rminos y Condiciones</a>
						</div>
						<div class="col s12 m6">
								<a href="#" class="white-text">Aviso de Privacidad</a>
						</div>
				</div>
				<div class="col s12 m3">
						<img src="libs/img/u5.png" alt="" width="" class="logo-footer">
				</div>
		</div>
</footer>-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="libs/js/materialize.js"></script>
  <script>
    function showProfile(meta_data_id) {
      // Search (POST http://cleverflowcoreapi.azurewebsites.net/api/metadata/search)
            
            jQuery.ajax({
                url: 'php/explorer/influencers/getGeneralInfo.php',
                type: "POST",
                data: {
                    "meta_data_id": meta_data_id,
                }
            })
            .done(function(data, textStatus, jqXHR) {
                 profile = JSON.parse(data);
                 console.log(profile);
                 $("#left-cont").html("");
                
                  $("#left-cont").html(' <div class="profile"> <h1>'+profile.response_object.full_name+'</h1> </div> <div class="profile-cont" > <h5>Información General</h5> <p class="color-gris"> Tipo de Influencer </p> <p class="color-azul"> '+profile.response_object.influencer_type_id+'</p> <p class="color-gris"> Fuente: '+profile.response_object.influencer_type_id_source+'</p> <p class="color-gris"> Edad </p> <p class="color-azul"> '+profile.response_object.reference_birth_date+'</p> <p class="color-gris"> Fuente: '+profile.response_object.reference_birth_date_source+'</p> <p class="color-gris"> Género </p> <p class="color-azul"> '+profile.response_object.gender_id+'</p> <p class="color-gris"> Fuente: '+profile.response_object.gender_id_source+'</p> <p class="color-gris"> Pais de Residencia </p> <p class="color-azul"> '+profile.response_object.country_id+'</p> <p class="color-gris"> Fuente: '+profile.response_object.country_id_source+'</p> <p class="color-gris"> Estado de Residencia </p> <p class="color-azul"> '+profile.response_object.country_id+'<p class="color-gris"> Fuente: '+profile.response_object.residence_state_id_source+'</p> <p class="color-gris"> Influencia General </p> <p class="color-azul"> '+profile.response_object.general_influence_score+'</p> <p class="color-gris"> Fuente: '+profile.response_object.general_influence_score_source+'</p>'); 


              
               
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.log("HTTP Request Failed");
            })
            .always(function() {
                /* ... */
            });

    }
    $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
      // toggle de la seccion del buscador
      $("#toggler").click(
        function() {
          $("#toggler-r").toggle('fast');
        }
      );

    });
    // Search (POST http://cleverflowcoreapi.azurewebsites.net/api/metadata/search)
     $( "#search" ).click(function(event) {
     
        jQuery.ajax({
            url: 'php/explorer/search.php',
            type: "POST",
            data: {
                "admin_id": "c0afe225-7cf1-4cf6-86f6-39256128036c",
                "birth_date": "1987-02-10",
                "gender_id": 1,
                "influencer_type_id": 1,
                "full_name": "Juan Carlos Espinosa",
                "country_id": 114,
                "residence_state_id": 503
            }
        })
        .done(function(data, textStatus, jqXHR) {
              profiles = JSON.parse(data);
               $("#profiles").html("");
             // console.log(jsonObject.response_object[0]);
              for (var i = 0; i<profiles.response_object.length;i++){
                  $("#profiles").append('<!-- REPETIR ESTE --> <div class="col s6 m4 l4"> <div class="caja-comun redes-busqueda tw"><div class="avatar"> <img id="u130_img" class="img " src="'+profiles.response_object[i].profile_picture_url+'"> </div> <div onclick="showProfile(\''+profiles.response_object[i].meta_data_id+'\')" class="cuenta-usr">@soyAlguno</div> <div class="seleccion"></div> <div class="red-usr tw">'+profiles.response_object[i].followers_count_str+'</div> </div> </div> <!--termina bloque perfil-->'); 
                  console.log(profiles.response_object[i].meta_data_id);


              }
          
           
          
            //console.log("HTTP Request Succeeded: " + jqXHR.status);
          
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("HTTP Request Failed");
        })
        .always(function() {
            /* ... */
        });

     });
        



    $( "#enter" ).click(function(event) {
                   
                    event.preventDefault();
                    // Validate Credentials (GET http://cleverflowcoreapi.azurewebsites.net/api/influencers/validate_credentials)
                
                        jQuery.ajax({
                        url: "php/explorer/validateCredentials.php",
                        type: "POST",
                        data: {
                            "mail_address":$("#mail").val(),
                            "password": $("#pass").val()
                        },
                        dataType: "json"                               
                        })
                        .done(function(data, textStatus, jqXHR) {
                          
                            
                            if (data["internal_code"]==0) {
                              
                               
                            }else  if (data["internal_code"]==1){
                                swal({
                                    title: 'Error',
                                    html: true,
                                    text: "<i>No se pudeo hacer la búsqueda</i>",
                                    type: 'error',
                                    showCancelButton: false,
                                    confirmButtonColor: '#DD6B55',
                                 });
                                
                            }
                            
                            
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            //console.log("HTTP Request Failed"+jqXHR+textStatus+errorThrown);
                            console.log(jqXHR.responseText);
                             swal({
                                    title: 'Error',
                                    text: 'Error en la llamada',
                                    type: 'error',
                                    showCancelButton: false,
                                    confirmButtonColor: '#DD6B55',
                                 });
                            
                        })
                        .always(function() {
                            
                        });
                   
                    
                    
              
              });
  </script>
</body>

</html>
