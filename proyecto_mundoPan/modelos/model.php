<?php
/**
 * este archivo me va a enlazar lo que me envia el controlador (controlador.php), para que procese la informacion y haga la interacion, haga toda la logica  de lo que necesito para que la respuesta sea la pagina que esta pidiendo el usuario
 */
class EnlacesPaginas
{
   public function enlacesPaginasModel($enlacesModel){
      if ($enlacesModel=="nosotros"   ||
          $enlacesModel=="servicios"  ||
          $enlacesModel=="contactenos")
      {

    $module = "vistas/modulos/".$enlacesModel.".php";
}
else if($enlacesModel=="index" ){
	$module = "vistas/modulos/inicio.php";
}
else{
	$module = "vistas/modulos/inicio.php";
}
     return $module;
}
}
?>