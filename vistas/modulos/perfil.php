<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Perfil
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Perfil</li>
    
    </ol>

  </section>

  <?php
    
   
   $item = "id";
   $valor = $_SESSION["id"];

   $datos = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

  ?>

  

  <section class="content">

    <div class="box">

      <div class="box-body">


        <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box">
            <div class="box-body box-profile">

              <?php

                 if($datos["foto"] != ""){

                  echo '<img class="profile-user-img img-responsive img-circle" src="'.$datos["foto"].'" alt="User profile picture">';


                 }else{


                  echo '<img class="profile-user-img img-responsive img-circle" src="vistas/img/usuarios/default/anonymous.png" alt="User profile picture">';

                 }



              echo'

              <h3 class="profile-username text-center">'.$datos["nombre"].'</h3>

              
              
              <ul class="list-group list-group-unbordered">

                <li class="list-group-item">

                  <b>ID</b> <a class="pull-right">'.$datos["id"].'</a>

                </li>

                <li class="list-group-item">

                  <b>Perfil</b> <a class="pull-right">'.$datos["perfil"].'</a>

                </li>

                <li class="list-group-item">

                  <b>Usuario</b> <a class="pull-right">'.$datos["usuario"].'</a>

                </li>

                <li class="list-group-item">

                  <b>Nombres</b> <a class="pull-right">'.$datos["nombre"].'</a>

                </li>

                <li class="list-group-item">

                  <b>Correo</b> <a class="pull-right">'.$datos["correo"].'</a>

                </li>                

                <li class="list-group-item">

                  <b>Ultimo Log</b> <a class="pull-right">'.$datos["ultimo_login"].'</a>

                </li>
  
              </ul>

              
              <button class="btn btn-warning btn-block btnEditarUsuario" idUsuario="'.$datos["id"].'"data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i> Editar</button>

              ';

                ?>

            </div>
            
          </div>
          
        </div>

      </div>

      </div>

    </div>

  </section>

</div>



<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarPerfil" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">


      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body row">

            
            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="form-group ">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" required>

                 <input type="hidden"name="editarId" id="editarId" >

              </div>

            </div>
           
          <!-- ENTRADA PARA EL USUARIO -->

             

                <input type="hidden" class="form-control input-lg" name="editarUsuario" id="editarUsuario" required readonly>

                <input type="hidden" class="form-control input-lg" name="editarPerfil" id="editarPerfil" required readonly>  



          <!-- ENTRADA PARA EL CORREO -->

             <div class="form-group ">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="email" class="form-control input-lg" name="editarCorreo" id="editarCorreo" required >

              </div>

            </div>                                                    


            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group ">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Ingresar contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn" style="background-color:#8A6E3D; color:#ffffff;">Guardar</button>

        </div>


   <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

   ?>  

      </form>


    
 
    </div>

  </div>

</div>





