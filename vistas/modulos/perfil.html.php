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


  <section class="content">

    <div class="box">

      <div class="box-body">


        <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box">
            <div class="box-body box-profile">

              <?php

                           if($_SESSION["foto"] != ""){

                            echo '<img class="profile-user-img img-responsive img-circle" src="'.$_SESSION["foto"].'" alt="User profile picture">';


                           }else{


                            echo '<img class="profile-user-img img-responsive img-circle" src="vistas/img/usuarios/default/anonymous.png" alt="User profile picture">';

                           }



              echo'

              <h3 class="profile-username text-center">'.$_SESSION["nombre"].'</h3>

              ';

                ?>
              
              <ul class="list-group list-group-unbordered">

                <li class="list-group-item">

                  <b>Usuario</b> <a class="pull-right">lcardoso</a>

                </li>

                <li class="list-group-item">

                  <b>Nombres</b> <a class="pull-right">Jose Leonardo</a>

                </li>

                <li class="list-group-item">

                  <b>Apellidos</b> <a class="pull-right">Cardoso Rodriguez</a>

                </li>

                <li class="list-group-item">

                  <b>Telefono</b> <a class="pull-right">3224144374</a>

                </li>

                <li class="list-group-item">

                  <b>Tipo Documento</b> <a class="pull-right">Cedula Extrangera</a>

                </li>

                <li class="list-group-item">

                  <b>Numero Cedula</b> <a class="pull-right">1073167005 </a>

                </li>

                <li class="list-group-item">

                  <b>Correo</b> <a class="pull-right">lcardoso@oxohotel.com</a>

                </li>

                <li class="list-group-item">

                  <b>Hotel</b> <a class="pull-right">Hiex 94</a>

                </li>

                <li class="list-group-item">

                  <b>Direccion</b> <a class="pull-right">cll 123 n 123</a>

                </li>

              </ul>

              
              <button class="btn btn-warning btn-block btnEditarUsuario" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i> Editar</button>

            </div>
            
          </div>
          
        </div>

      </div>

      </div>

    </div>

  </section>

</div>
