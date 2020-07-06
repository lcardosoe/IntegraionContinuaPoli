<?php 


class ControladorCategorias{


	/*========================================
	=            Crear Categorias            =
	========================================*/
	
   
    static public function ctrCrearCategoria(){

       if(isset($_POST["nuevaCategoria"])){

          if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){

          	$tabla = "categorias";

          	$datos = $_POST["nuevaCategoria"];

          	$respuesta = ModeloCategorias::mdlIngresarCategoria($tabla,$datos);

          	if($respuesta == "ok"){

          		echo' <script>

                 swal({

                 	type: "success",
                 	title: "¡La categoría ha sido guarda corectamente! ",
                 	showConfirmButton: true,
                 	confirmButtonText: "Cerrar",
                 	closeOnConfirm: false
                 	}).then((result) => {
                 		if(result.value){

                 			window.location = "categorias";
                 		}
                 	})

          	     </script>';


          	}


          }else{

          	echo' <script>

                 swal({

                 	type: "error",
                 	title: "¡La categoría no puede ir vacia o llevar caracteres espeiales! ",
                 	showConfirmButton: true,
                 	confirmButtonText: "Cerrar",
                 	closeOnConfirm: false
                 	}).then((result) => {
                 		if(result.value){

                 			window.location = "categorias";
                 		}
                 	})

          	     </script>';
          }

       }


    }



/*==========================================
=            Mostrar Categorias            =
==========================================*/


    static public function ctrMostrarCategoria($item,$valor){

    	$tabla = "categorias";

    	$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla,$item,$valor);

    	return $respuesta;
    }	




    /*========================================
	=          Editar Categorias            =
	========================================*/
	
   
    static public function ctrEditarCategoria(){

       if(isset($_POST["editarCategoria"])){

          if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){

          	$tabla = "categorias";

          	$datos = array("categoria"=>$_POST["editarCategoria"],
          		            "id"=>$_POST["idCategoria"]);

          	$respuesta = ModeloCategorias::mdlEditarCategoria($tabla,$datos);

          	if($respuesta == "ok"){

          		echo' <script>

                 swal({

                 	type: "success",
                 	title: "¡La categoría ha sido editada corectamente! ",
                 	showConfirmButton: true,
                 	confirmButtonText: "Cerrar",
                 	closeOnConfirm: false
                 	}).then((result) => {
                 		if(result.value){

                 			window.location = "categorias";
                 		}
                 	})

          	     </script>';


          	}


          }else{

          	echo' <script>

                 swal({

                 	type: "error",
                 	title: "¡La categoría no puede ir vacia o llevar caracteres espeiales! ",
                 	showConfirmButton: true,
                 	confirmButtonText: "Cerrar",
                 	closeOnConfirm: false
                 	}).then((result) => {
                 		if(result.value){

                 			window.location = "categorias";
                 		}
                 	})

          	     </script>';
          }

       }


    }

   
    /*========================================
    =            Borrar Categoria            =
    ========================================*/

   
    static public function ctrBorrarCategoria(){

    	if(isset($_GET["idCategoria"])){

    		$tabla = "Categorias";
    		$datos = $_GET["idCategoria"];

    		$respuesta = ModeloCategorias::mdlBorrarCategoria($tabla, $datos);

    		if($respuesta == "ok"){

    			echo' 
             
                    <script>
            
                      swal({

                      	type: "success",
                      	title: "La categoria ha sido borrada corectamente",
                      	showConfirmButton: true,
                      	confirmButtonText: "Cerrar",
                      	closeOnConfirm: false
                      	}).then((result)=>{
                                if(result.value){

                                	window.location = "categorias";
                                }

                      		})

                    </script>';
    		}
    	}
    }

}

