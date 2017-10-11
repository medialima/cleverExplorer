<?php
echo' <div class="head">
          <div class="row head">
              <div class="medium-12 columns">
                  <div class="nav-wrap">
                  <div class="cleverflow-logo"><a href="index.html"></a></div>
                  <div class="m5"><a href="#" class="show_hide" style="position: relative; top:4px; color:orange">18</a></div>
                  <div class="burger">
                      <div id="nav-icon4" class="show_hide2"><span></span><span></span><span></span></div>                         
                  </div>
                  <div id="burger" class="nav">
                      <div class="m1"><a href="dashboard.php">Dashboard</a></div>
                      <div class="m2"><a href="referral.php">Oportunidades</a></div>
                      <div class="m3"><a href="cuentas.php">Configuración</a></div>
                      <div class="m4"><a href="php/logout.php">'.$_SESSION['name'].'</a></div>
                  </div><!--nav-->
                      
                  </div><!--nav-wrap-->
              </div><!--column-->
          </div><!--row-->
      </div><!--head-->
            
            <div class="dashboard">
              <div id="nav-mov" class="slidingDiv2" style="display: none">
                    <div class="nav-wrap">
                        <div class="m1"><a href="dashboard.php">Dashboard</a></div>
                        <div class="m2"><a href="oportunidades.php">Oportunidades</a></div>
                        <div class="m3"><a href="cuentas.php">Configuración</a></div>
                        <div class="m4"><a href="php/logout.php">Salir</a></div>
                        <div class="slidingDiv3" style="display: none">
                          <ul>
                          <li>Perfil</li>
                          <li>Referral</li>
                          <li>salir</li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="notifications">
                <div class="slidingDiv" style="display: none">
                    <div class="not-row">
                        <div class="not-type">Bienvenidos</div>
                        <div class="not-cont"><a href="#">Bienvenido a cleverflow</a></div>
                    </div>
                    <div class="not-row">
                        <div class="not-type">Oportunidad</div>
                        <div class="not-cont"><a href="#">Aqui podemos tener notificaciones de todo tipo</a></div>
                    </div>
                    <div class="not-row">
                        <div class="not-type">Cuenta</div>
                        <div class="not-cont"><a href="#">Aqui podemos tener notificaciones de todo tipo incluso a dos lineas</a></div>
                    </div>
          <div class="not-row">
                        <div class="not-type">Cuenta</div>
                        <div class="not-cont"><a href="#">Aqui podemos tener notificaciones de todo tipo incluso a dos lineas</a></div>
                    </div>
          <div class="not-row">
                        <div class="not-type">Cuenta</div>
                        <div class="not-cont"><a href="#">Aqui podemos tener notificaciones de todo tipo incluso a dos lineas</a></div>
                    </div>
          <div class="more-not"><a href="notificaciones.php">Ver mas</a></div>
                </div>
            </div>';