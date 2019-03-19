<?php

/**
 * 
 */
class mvcControlador{
	// llamada a la plantilla
	#---------------------------------------
	public function plantilla(){
		include "vistas/plantilla.php";
		
	}

	#interacion del usuario
	#-----------------------------------------
	public function enlacesPaginasController(){

		if(isset($_GET["action"])){
		$enlacesController = $_GET["action"];

		}
		else {
			$enlacesController = "index";
		}

		
		$respuesta=EnlacesPaginas::enlacesPaginasModel($enlacesController);  
		
		include $respuesta;

	}
	  }
?>