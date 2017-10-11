<?php
$not=json_decode($_SESSION['notificacionesA']);

echo(' <div class="head">
          <div class="row head">
              <div class="medium-12 columns">
                  <div class="nav-wrap">
                  <div class="cleverflow-logo"><a href="index.php"></a></div>
                  <div class="m5"><a href="#" class="show_hide" style="position: relative; top:4px; color:orange">'.$not->response_object->unread_notifications.'</a></div>
                  <div class="burger">
                      <div id="nav-icon4" class="show_hide2"><span></span><span></span><span></span></div>                         
                  </div>
                  <div id="burger" class="nav">
                      <div class="m1"><a href="dashboard-an.php">Escritorio</a></div>
                      <div class="m2"><a href="camp.php">Campañas</a></div>
                      <div class="m3"><a href="marcas.php">Mis marcas</a></div>
                      <div class="m4"><a class="show_hide3">Mi cuenta</a></div>
                      <div class="slidingDiv3" style="display: none">
                          <ul>
                                <li><a href="perfil-an.php">'.$_SESSION['name'].'</a></li>
                                <li><a href="seguridadA.php">Seguridad</a></li>
                                <li class="p12" id="DatosFisMenu"><a href="saldos.php">Saldo</a></li>
                                <li><a href="php/logout.php">Salir</a></li>

                          </ul>
                        </div>
                  </div><!--nav-->
                      
                  </div><!--nav-wrap-->
              </div><!--column-->
          </div><!--row-->
      </div><!--head-->
            
            <div class="dashboard">
              <div id="nav-mov" class="slidingDiv2" style="display: none">
                    <div class="nav-wrap">
                        <div class="m1"><a href="dashboard-an.php">Escritorio</a></div>
                        <div class="m2"><a href="">Campañas</a></div>
                        <div class="m3"><a href="marcas.php">Mis marcas</a></div>
                        <div class="m4"><a href="#">Mi cuenta</a></div>
                      <ul class="perfil-nav">                               
                                <li><a href="perfil-an.php">'.$_SESSION['name'].'</a></li>
                                <li><a href="seguridadA.php">Seguridad</a></li>
                                <li class="p12" id="DatosFisMenu"><a href="saldos.php">Saldo</a></li>
                                <li><a href="php/logout.php">Salir</a></li>
                        </ul>
                    </div>
                </div>
                <div class="notifications">
                <div class="slidingDiv" style="display: none">');
                foreach ( $not->response_object->notifications as $obj ) {
                   
                    echo(' <div class="not-row">
                    
                        <div class="not-type">'.$obj->{'type_name'}.'</div>
                        <div class="not-cont"><a href="#">'.$obj->{'content'}.'</a></div>
                    </div>');
                    
                }
                   
            echo('<div class="more-not"><a href="notificacionesA.php">Ver mas</a></div>
                </div>
            </div>');
     