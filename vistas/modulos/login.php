<div id="back">
<div class="login-box">

  <div class="login-logo">

    <img src="vistas/img/plantilla/logo-login.png" class="img-responsive" style="padding: 30px 100px 0px 100px">

  </div>

  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al Sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>

          <div class="col-xs-2"></div>

         <div class="col-xs-6">


          <button type="submit" class="btn btn-primary btn-block btn-flat" data-toggle="modal" data-target="#modalAgregarRecuperarContrasena">Olvidé mi Contraseña</button>

        </div>


      </div>

      <?php
  
         $login = new ControladorUsuarios();
         $login -> ctrIngresoUsuario();
   
      ?>

    </form>

  </div>

</div>

</div>




<!--=====================================
MODAL RECUPERAR CONTRASEÑA
======================================-->

<div id="modalAgregarRecuperarContrasena" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Recuperar Contraseña</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body row">

            <div class="panel" align="center">DILIGENCIE DATOS REGISTRADOS</div>

            <!-- ENTRADA PARA LA CEDULA -->

             <div class="form-group col-lg-6">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuarioRecuperarPassword" placeholder="Ingresar usuario"  required>

              </div>

            </div>


            <!-- ENTRADA PARA EL CORREO-->

             <div class="form-group col-lg-6">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-book"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCorreoRecuperarPassword" placeholder="Ingresar Correo" id="nuevoCorreo" required>

              </div>

            </div>           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <div align="center">Debe insertar los datos que tiene registrados en nuestra página</div><br>

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn btn-primary" >Enviar </button>

        </div>

        <?php

           $recuperarPassword = new ControladorCorreos();
   
           $recuperarPassword -> ctrEnvioRecuperarContrasena();

        ?>

      </form>

    </div>

  </div>

</div>


