<?php
session_start();
require 'cleverApi/Influencers.php';



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
        <script src="js/sweetalert.min.js"></script>
        <link rel="stylesheet" href="css/sweetalert.css" />

    </head>
    <body class="login-bg">

      <?include 'layout/top.php';
      include 'layout/submenu.php';
      ?>
               
            <div class="row">
                <div class="large-12 columns">   
                    <div class="perfil-wrap">
                            <div class="reg-tit two"><span class="reg-tit-span">Datos básicos</span></div>
                                <div class="input-box">
                                    <div class="wrap">
                                    <input type="text" placeholder="Nombre*"  id='nombre' class="in220">
                                    <span class="input-alert" id="errorNombre"style="visibility: hidden; color: red;">Campo requerido</span>
                                    </div>
                                </div>
                            
                                <div class="input-box">
                                    <div class="wrap">
                                     <input type="text" id='apellidoPat'  placeholder="Apellido Paterno*" class="in220">
                                     <span class="input-alert" id="errorApellidoPat"style="visibility: hidden; color: red;">Campo requerido</span>
                                     </div>
                                </div>
                            
                                <div class="input-box">
                                    <div class="wrap">
                                     <input type="text" placeholder="Apellido Materno*" id="apellidoMat" class="in220">
                                     <span class="input-alert" id="errorApellidoMat"style="visibility: hidden; color: red;">Campo requerido</span>
                                    </div>
                                </div>                            

                                <div class="input-box">
                                    <div class="wrap">
                                    <label><strong style="margin: 0;">Género*</strong></label>
                                    <label for="hombre">Hombre</label>
                                    <input type="radio" name="sexo" id="hombre" value="1" checked>  
                                    <label for="mujer">Mujer</label>
                                    <input type="radio" name="sexo" id="mujer" value="2">
                                    <span class="input-alert" style="visibility: hidden">Campo requerido</span>
                                    </div>
                                </div>
                                     
                                <div class="blend">
                                     <div class="date-lbl">Fecha de nacimiento</div>
                                       <div class="center">  
                                           
                                           <div class="input-box-b first">
                                        <select id="dia" class="select-one">
                                            <option value="">Día</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>                               
                                           <span class="input-alert" style="visibility: hidden">Requerido</span>
                                           </div>
                                           <div class="input-box-b">
                                    <select id="mes" class="select-one">
                                    <option value="">Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Novimembre</option>
                                    <option value="12">Diciembre</option>
                                    </select>
                                           <span class="input-alert" style="visibility: hidden">Requerido</span>
                                           </div>
                                           <div class="input-box-c">
                            <select id="ano" class="select-three">
                                <option value="">Año</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                                <option value="1900">1900</option>
                            </select>
                                           <span class="input-alert" style="visibility: hidden">Requerido</span>
                                            </div>     
                                       </div><!--center-->
                                </div><!--blend-->
                              <div class="separator"></div> 
                    </div><!--reg-wrap-->
                </div><!--colums-->
            </div><!--row-->
            
            
            
            <div class="row">
                <div class="large-12 columns">

                        <div class="boxtype-one">
                            <div class="reg-tit three">
                                <span class="reg-tit-span">Datos complementarios</span>
                            </div>
                            
                            <div class="input-box">
                                <div class="wrap">
                              <select id="estados" class="select-two">
                                <option value="">Estado de recidencia</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                <option value="Colima">Colima</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Durango">Durango</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Michoacan de Ocampo">Michoacan de Ocampo</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo Leon">Nuevo Leon</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Queretaro de Arteaga">Queretaro de Arteaga</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosi">San Luis Potosi</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz-Llave">Veracruz-Llave</option>
                                <option value="Yucatan">Yucatan</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                            <select id="ciudades" class="select-two">
                                <option value="">Ciudad</option>
                                <option value="">Distrito Federal</option>
                                <option value="">Puebla</option>
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                            <select id="escolaridad" class="select-two">
                                <option value="">Nivel académico</option>
                                <option value="">Nulo</option>
                                <option value="">Primaria</option>
                                <option value="">Secundaria</option>
                                <option value="">Preparatoria</option>
                                <option value="">Universitario</option>
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                            <select id="carrera" class="select-two">
                                <option value="">Carrera</option>
                                <option value="">Derecho</option>
                                <option value="">Comunicaciones</option>
                                <option value="">Periodismo</option>
                                <option value="">Ingeniería</option>
                                <option value="">Salud</option>
                            </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                            <select id="ocupacion" class="select-two">
                            </select>
                                <span class="input-alert" id="errorOcupacion"style="visibility: hidden; color: red;">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                <input type="text" placeholder="Teléfono fijo" id="tel"  class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                <input type="text" placeholder="Celular" id="cel"  class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                        </div><!--boxtype-->  
                        <div class="separator"></div> 
                         
                </div><!--12 colum-->
            </div> <!--Row-->
            

            <div class="row">
                <div class="large-12 columns">

                        <div class="boxtype-one">
                            <div class="reg-tit two">
                                <span class="reg-tit-span">Datos de envío</span>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                <input id="" type="text" placeholder="Calle" class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                             <div class="input-box">
                                <div class="wrap">
                                <input id="" type="text" placeholder="Número exterior" class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                             <div class="input-box">
                                <div class="wrap">
                                <input id="" type="text" placeholder="Número interior" class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                <input id="" type="text" placeholder="Colonia" class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                <input id="" type="text" placeholder="Código postal" class="in220b">
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>
                            <div class="input-box">
                                <div class="wrap">
                                <select id="Municipio" class="select-two">
                                <option value="">Municipio</option>
                                </select>
                                <span class="input-alert" style="visibility: hidden">Requerido</span>
                                </div>
                            </div>

                        </div><!--boxtype-->  
                        <div class="separator"></div> 
                         
                </div><!--12 colum-->
            </div> <!--Row-->

             <div class="row">
                    <div class="large-12 columns">
                    <div class="btn-wrap">
                        <div class="right"><input type="submit" id="send" class="btn-four" value="Guardar cambios"></div>
                        <div class="right"><input type="submit" class="btn-five" id="cancel" value="Cancelar"></div>
                    </div>
                    </div>
                </div>
            
            
           
            </div><!--dash-->  
              <div class="footer">
                <div class="footer-wrap">
                    <div class="f-left">
                        <ul>
                            <li><a href="#">Preguntas frecuentes</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Terminos y condiciones</a></li>
                            <li><a href="#">Aviso de privacidad</a></li>
                            <li><a href="#">Código de Ética</a></li>
                            
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
                <div class="copyright">Copyright © 2012-2015 de Cleverflow de México, S.A.P.I. de S.V.</div>
              </div>
            </div>
            </div><!--Wraper-->
            
            <script src="js/vendor/jquery.js"></script>
            <script src="js/foundation.min.js"></script>
            <script src="js/circle.js"></script>
            <script>
            $(document).foundation();        
            $(document).foundation('tooltip', 'reflow');
            // Get Catalogue by ID (GET http://cleverflowcoreapi.azurewebsites.net/api/globaldata/get_catalogue_by_id)
            function isMail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
              }
              
            
            $(function() {
                    
                     
                    jQuery.ajax({
                        url: "php/getPersonal.php",
                        data: {uuid:"<?echo $_SESSION['UUID'] ?>"},
                        type:"POST"
                    })
                    .done(function(data, textStatus, jqXHR) {
                        res= JSON.parse(data);
                        console.log(res);
                        $('#nombre').val(res.response_object.name);
                        $('#apellidoPat').val(res.response_object.last_name_1);
                        $('#apellidoMat').val(res.response_object.last_name_2);
                        $('#tel').val(res.response_object.phone);
                        $('#cel').val(res.response_object.cell_phone);
                        $("input[name=sexo][value="+res.response_object.gender_id+"]").attr('checked', 'checked');
                        var dateObj = new Date(res.response_object.birthday);
                        var month = dateObj.getUTCMonth() + 1; //months from 1-12
                        var day = dateObj.getUTCDate();
                        var year = dateObj.getUTCFullYear();
                       
                        $('#dia option[value="'+day+'"]').attr('selected', 'selected');
                        $('#mes option[value="'+month+'"]').attr('selected', 'selected');
                        $('#ano option[value="'+year+'"]').attr('selected', 'selected');
                        console.log(dateObj);
                       $('#estados').html(data);
                       //Llena Estado
                        jQuery.ajax({
                            url: "php/getEstado.php"
                        })
                        .done(function(data, textStatus, jqXHR) {
                            $('#estados').html(data);
                            $('#estados option[value="'+res.response_object.residence_state_id+'"]').attr('selected', 'selected');
                           
                            console.log("HTTP Request Succeeded: " + jqXHR.status);
                            
                                $.ajax({url: 'php/getCiudad.php?svalue='+res.response_object.residence_state_id,
                                    success: function(output) {
                                       //alert(output);
                                       $('#ciudades').html(output);
                                       $('#ciudades option[value="'+res.response_object.residence_municipality_id+'"]').attr('selected', 'selected');
                                   },
                                 error: function (xhr, ajaxOptions, thrownError) {
                                   alert(xhr.status + " "+ thrownError);
                                 }});
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            console.log("HTTP Request Failed");
                        })
                        .always(function() {
                            /* ... */
                        });
                          //Llena nivel Academico
                        jQuery.ajax({
                            url: "php/getNivelAcademico.php"
                        })
                        .done(function(data, textStatus, jqXHR) {
                            $('#escolaridad').html(data);
                            $('#escolaridad option[value="'+res.response_object.academic_level_id+'"]').attr('selected', 'selected');
                            if (res.response_object.academic_level_id>3) {
                                 jQuery.ajax({
                                    url: "php/getCarrera.php"
                                })
                                .done(function(data, textStatus, jqXHR) {
                                    $('#carrera').html(data);
                                    $('#carrera option[value="'+res.response_object.major_id+'"]').attr('selected', 'selected');
                                })
                                .fail(function(jqXHR, textStatus, errorThrown) {
                                    console.log("HTTP Request Failed");
                                    //alert("faloo carrera");
                                })
                                .always(function() {
                                    /* ... */
                                });
                            }else{
                                 $('#carrera').html('<option value="0">No Aplica</option>');
                                
                            }

                           
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            console.log("HTTP Request Failed");
                           // alert("faloo nivel academico");
                        })
                        .always(function() {
                            /* ... */
                        });
                        
                        jQuery.ajax({
                                    url: "php/getOcupacion.php"
                                })
                                .done(function(data, textStatus, jqXHR) {
                                    $('#ocupacion').html(data);
                                    $('#ocupacion option[value="'+res.response_object.occupation_id+'"]').attr('selected', 'selected');
                                })
                                .fail(function(jqXHR, textStatus, errorThrown) {
                                    console.log("HTTP Request Failed");
                                })
                                .always(function() {
                                    /* ... */
                                });
                       
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log("HTTP Request Failed");
                       // alert("faloo nivel academico");
                    })
                    .always(function() {
                        /* ... */
                    });
                    
                    
                    
                    //jQuery.ajax({
                    //    url: "php/getCarrera.php"
                    //})
                    //.done(function(data, textStatus, jqXHR) {
                    //    $('#carrera').html(data);
                    //    //console.log("HTTP Request Succeeded: " + jqXHR.status);
                    //    //console.log(data);
                    //})
                    //.fail(function(jqXHR, textStatus, errorThrown) {
                    //    console.log("HTTP Request Failed");
                    //    //alert("faloo carrera");
                    //})
                    //.always(function() {
                    //    /* ... */
                    //});
            });
            
             $('#estados').change(function(e) {
                //Grab the chosen value on first select list change
                var selectvalue = $(this).val();
             
                //Display 'loading' status in the target select list
                $('#ciudades').html('<option value="">Cargando...</option>');
             
                if (selectvalue == "") {
                    //Display initial prompt in target select if blank value selected
                   $('#ciudades').html('<option value="">Ciudades*</option>');
                } else {
                  //Make AJAX request, using the selected value as the GET
                  $.ajax({url: 'php/getCiudad.php?svalue='+selectvalue,
                         success: function(output) {
                            //alert(output);
                            $('#ciudades').html(output);
                        },
                      error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + " "+ thrownError);
                      }});
                    }
                });
             $('#escolaridad').change(function(e) {
                //Grab the chosen value on first select list change
                var selectvalue = $(this).val();
             
                //Display 'loading' status in the target select list
               
             
                if (selectvalue == "4"||selectvalue == "5"||selectvalue == "6") {
                    jQuery.ajax({
                        url: "php/getCarrera.php"
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $('#carrera').html(data);
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log("HTTP Request Failed");
                        //alert("faloo carrera");
                    })
                    .always(function() {
                        /* ... */
                    });
                } else {
                  //Make AJAX request, using the selected value as the GET
                     $('#carrera').html('<option value="0">No Aplica</option>');

                }
             });
             
             
             
               
               $('#nombre').focusout(function(e) {
                    if ($("#nombre").val()) {
                             $( "#nombre" ).addClass( "f-go" );
                            $( "#nombre" ).removeClass( "f-alert" );                            
                            $("#errorNombre").css("visibility","hidden");
                            
                    }else{
                            $( "#nombre" ).removeClass( "f-go" );
                            $( "#nombre" ).addClass( "f-alert" );                            
                            $("#errorNombre").css("visibility","visible");
                            
                            
                           
                        
                    }
                });
               
               $('#apellidoPat').focusout(function(e) {
                    if ($("#apellidoPat").val()) {
                             $( "#apellidoPat" ).addClass( "f-go" );
                            $( "#apellidoPat" ).removeClass( "f-alert" );                            
                            $("#errorApellidoPat").css("visibility","hidden");
                            
                    }else{
                            $( "#apellidoPat" ).removeClass( "f-go" );
                            $( "#apellidoPat" ).addClass( "f-alert" );                            
                            $("#errorApellidoPat").css("visibility","visible");
                            
                            
                           
                        
                    }
                });
               
                $('#apellidoMat').focusout(function(e) {
                    if ($("#apellidoMat").val()) {
                             $( "#apellidoMat" ).addClass( "f-go" );
                            $( "#apellidoMat" ).removeClass( "f-alert" );                            
                            $("#errorApellidoMat").css("visibility","hidden");
                            
                    }else{
                            $( "#apellidoMat" ).removeClass( "f-go" );
                            $( "#apellidoMat" ).addClass( "f-alert" );                            
                            $("#errorApellidoMat").css("visibility","visible");
                            
                            
                           
                        
                    }
                });
            function validateForm() {
                 validAno = true;
                validMes = true;
                ValidDia = true;
                validCarrera = true;
                validEstado = true;
                validCiudad = true;
                validEscolaridad = true;
                validNombre = true;
                validApellidoPat= true;
                validApellidoMat= true;
                validMailConf= true;
                validPassConfig= true;
                validOcupacion= true;
                validPass= true;
                validTerms =$('#checkbox').is(':checked')
                validMail = $("#correct").val();
                ano= parseInt($( "#ano option:selected" ).val());
                mes= parseInt($( "#mes option:selected" ).val());
                dia = parseInt($( "#dia option:selected" ).val());
                carrera = $( "#carrera option:selected" ).val();
                escolaridad = $( "#escolaridad option:selected" ).val();
                ocupacion = $( "#ocupacion option:selected" ).val();
                ciudades = $( "#ciudades option:selected" ).val();
                estados = $( "#estados option:selected" ).val();
                nombre = $("#nombre").val();
                apellidoMat = $("#apellidoMat").val();
                apellidoPat = $("#apellidoPat").val();
                
                
                
                
                if (!ano) {
                            $( "#ano" ).removeClass( "f-go" );
                            $( "#ano" ).addClass( "f-alert" );                            
                            $("#errorAno").css("visibility","visible");
                            validAno = false;
                           
                           
                }else{
                            $( "#ano" ).removeClass( "f-alert" );
                            $( "#ano" ).addClass( "f-go" );                            
                            $("#errorAno").css("visibility","hidden");
                            validAno = true;
                           
                    
                }
                 if (!mes) {
                            $( "#mes" ).removeClass( "f-go" );
                            $( "#mes" ).addClass( "f-alert" );                            
                            $("#errorMes").css("visibility","visible");
                            validMes = false;
                           
                }else{
                            $( "#mes" ).removeClass( "f-alert" );
                            $( "#mes" ).addClass( "f-go" );                            
                            $("#errorMes").css("visibility","hidden");
                            validMes = true;
                    
                }
                if (!dia) {
                            $( "#dia" ).removeClass( "f-go" );
                            $( "#dia" ).addClass( "f-alert" );                            
                            $("#errorDia").css("visibility","visible");
                            validDia = false;
                            
                           
                }else{
                            $( "#dia" ).removeClass( "f-alert" );
                            $( "#dia" ).addClass( "f-go" );                            
                            $("#errorDia").css("visibility","hidden");
                            validDia = true;
                            
                }
                if (!carrera) {
                            $( "#carrera" ).removeClass( "f-go" );
                            $( "#carrera" ).addClass( "f-alert" );                            
                            $("#errorCarrera").css("visibility","visible");
                            validCarrera = false;
                           
                }else{
                            $( "#carrera" ).removeClass( "f-alert" );
                            $( "#carrera" ).addClass( "f-go" );                            
                            $("#errorCarrera").css("visibility","hidden");
                            validCarrera = true;
                    
                }
                if (!escolaridad) {
                            $( "#escolaridad" ).removeClass( "f-go" );
                            $( "#escolaridad" ).addClass( "f-alert" );                            
                            $("#errorEscolaridad").css("visibility","visible");
                            validEscolaridad= false;
                           
                }else{
                            $( "#escolaridad" ).removeClass( "f-alert" );
                            $( "#escolaridad" ).addClass( "f-go" );                            
                            $("#errorEscolaridad").css("visibility","hidden");
                            validEscolaridad = true;
                    
                }
                 if (!ciudades) {
                            $( "#ciudades" ).removeClass( "f-go" );
                            $( "#ciudades" ).addClass( "f-alert" );                            
                            $("#errorCiudades").css("visibility","visible");
                            validCiudades= false;
                           
                }else{
                            $( "#ciudades" ).removeClass( "f-alert" );
                            $( "#ciudades" ).addClass( "f-go" );                            
                            $("#errorCiudades").css("visibility","hidden");
                            validCiudades= true;
                    
                }
                if (!estados) {
                            $( "#estados" ).removeClass( "f-go" );
                            $( "#estados" ).addClass( "f-alert" );                            
                            $("#errorEstados").css("visibility","visible");
                            validEstados= false;
                           
                }else{
                            $( "#estados" ).removeClass( "f-alert" );
                            $( "#estados" ).addClass( "f-go" );                            
                            $("#errorEstados").css("visibility","hidden");
                            validEstados = true;
                    
                }
                if (!apellidoMat) {
                            $( "#apellidoMat" ).removeClass( "f-go" );
                            $( "#apellidoMat" ).addClass( "f-alert" );                            
                            $("#errorApellidoMat").css("visibility","visible");
                            validApellidoMat= false;
                           
                }else{
                            $( "#apellidoMat" ).removeClass( "f-alert" );
                            $( "#apellidoMat" ).addClass( "f-go" );                            
                            $("#errorApellidoMat").css("visibility","hidden");
                            validApellidoMat = true;
                    
                }
                if (!apellidoPat) {
                            $( "#apellidoPat" ).removeClass( "f-go" );
                            $( "#apellidoPat" ).addClass( "f-alert" );                            
                            $("#errorApellidoPat").css("visibility","visible");
                            validApellidoPat= false;
                           
                }else{
                            $( "#apellidoPat" ).removeClass( "f-alert" );
                            $( "#apellidoPat" ).addClass( "f-go" );                            
                            $("#errorApellidoPat").css("visibility","hidden");
                            validApellidoPat = true;
                    
                }
                if (!nombre) {
                            $( "#nombre" ).removeClass( "f-go" );
                            $( "#nombre" ).addClass( "f-alert" );                            
                            $("#errorNombre").css("visibility","visible");
                            validNombre= false;
                           
                }else{
                            $( "#nombre" ).removeClass( "f-alert" );
                            $( "#nombre" ).addClass( "f-go" );                            
                            $("#errorNombre").css("visibility","hidden");
                            validNombre = true;
                    
                }if (!ocupacion) {
                            $( "#ocupacion" ).removeClass( "f-go" );
                            $( "#ocupacion" ).addClass( "f-alert" );                            
                            $("#errorOcupacion").css("visibility","visible");
                            validOcupacion = false;
                           
                }else{
                            $( "#ocupacion" ).removeClass( "f-alert" );
                            $( "#ocupacion" ).addClass( "f-go" );                            
                            $("#errorOcupacion").css("visibility","hidden");
                            validOcupacion = true;
                    
                }
               
                
            
                
               
                 
                 
                
                if (validOcupacion&&validEstados && validCiudades && validEscolaridad && validCarrera && validAno && validMes && validDia && validApellidoMat && validApellidoPat && validNombre) {
                    return true;
                }else{
                    
                    return false;
                }
            
            }
            $( "#send" ).click(function() {
                
                ano= parseInt($( "#ano option:selected" ).val());
                mes= parseInt($( "#mes option:selected" ).val());
                dia = parseInt($( "#dia option:selected" ).val());
                correct= $("#correct").val();
                dateGo= new Date(ano,(mes-1),dia);
                date=ano + "-" + mes + "-" + dia + "T" + "00" + ":" +"00" + ":" + "00"
                
                if (!validateForm()) {
                    swal({
                                title: 'Error',
                                text: 'Hay errores en la forma',
                                type: 'error',
                                showCancelButton: false,
                                confirmButtonColor: '#987463',
                             });
                }else{
                    jQuery.ajax({
                    url: "php/updateInfluencer.php",
                    type: "POST",
                    data: {
                        "phone": $('#tel').val(),
                        "last_name_1": $('#apellidoPat').val(),
                        "academic_level_id": $('#escolaridad').val(),
                        "last_name_2": $('#apellidoMat').val(),
                        "gender_id": $('input[name=sexo]:checked').val(),
                        "major_id": $('#carrera').val(),
                        "cell_phone": $('#cel').val(),
                        "residence_state_id": $('#estados').val(),
                        "birthday": date,
                        "occupation_id": $('#ocupacion').val(),
                        "residence_municipality_id": $('#ciudades').val(),
                        "name": $('#nombre').val(),
                        "UUID": "<? echo $_SESSION["UUID"]?>"
                        },
                    dataType: "json"
                    
                })
                .done(function(data, textStatus, jqXHR) {
                    console.log("HTTP Request Succeeded: " + jqXHR.status);
                    
                    //console.log($.parseJSON(data));
                    //$.parseJSON(data)
                    if(data["internal_code"]=='0'){
                        swal({
                        title: 'Actualizado',
                        text: 'Tu información personal fue actualizada',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#987463',
                     });
                        
                        }else{
                             swal({
                                title: 'Error',
                                text: data["message"],
                                type: 'error',
                                showCancelButton: false,
                                confirmButtonColor: '#987463',
                             });
                             //console.log(data);
                                //alert(data["response_object"]['GeneralInformation']['mail_address']);
                            
                        }
                    
                  
                    //$( "form").append('<input type="text" name="data" value=" hola " />');
                     //$( "form").submit();
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("HTTP Request Failed");
                    alert("Error Al crear intentar nuevamente");
                })
                .always(function() {
                    /* ... */
                });
                    
                }
                
                

                    
            });
        </script>
            </script>   
    </body>
</html>
