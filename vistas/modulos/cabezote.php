<header class="main-header">
	
	<!--==============================
	=            Logotipo            =
	===============================-->
	
	<a href="inicio" class="logo">
		
		<!-- logo mini -->
       <span class="logo-mini">
       	
       	  <img src="vistas/img/plantilla/carrito-blanco.png" class="img-responsive" style="padding: 10px" >

       </span>

       <!-- logo normal -->
       <span class="logo-lg">
       	
       	  <img src="vistas/img/plantilla/Logo-lineal.png" class="img-responsive" style="padding: 10px 0px" >

       </span>

	</a>

	<!--==============================
	=      Barra de navegacion      =
	===============================-->

	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Boton de navegacion -->

		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			
			<span class="sr-only">Toogle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>

		</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">

			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<?php

                           if($_SESSION["foto"] != ""){

                           	echo'<img src="'.$_SESSION["foto"].'" class="user-image">';
                           }else{

                           	'<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
                           }

						?>
						
						
						<span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>

					</a>

				<!-- Drop Down toggle -->

				<ul class="dropdown-menu">
					
					<li class="user-body">
						
						<div class="pull-right">
							
							<a href="salir" class="btn btn-default btn-flat">Salir</a>

						</div>

						<div class="pull-right" style="position: absolute;left: 10%;">
				      				
				     		<a href="perfil" class="btn btn-default btn-flat">Mi Cuenta</a>

				        </div>

					</li>

				</ul>					

				</li>

			</ul>			

		</div>

	</nav>
	
	
	
</header>