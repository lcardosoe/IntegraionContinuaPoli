<?php 

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

 class AjaxCategorias{

 	/*=========================================
 	=            Editar Categorias            =
 	=========================================*/
 	
 	public $idCategoria;

 	public function ajaxEditarCategoria(){

 		$item = "id";
 		$valor = $this->idCategoria;

 		$respuesta = ControladorCategorias::ctrMostrarCategoria($item,$valor);

 		echo json_encode($respuesta); 


 	}
 	
 }

 /*========================================
 =            Editar Categoria            =
 ========================================*/
 
if(isset($_POST["idCategoria"])){

	$categoria = new AjaxCategorias();
	$categoria -> idCategoria = $_POST["idCategoria"];
	$categoria -> ajaxEditarCategoria();
}

