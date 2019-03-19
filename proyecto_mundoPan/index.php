
<?php
//salidad de las vistas al usuario, y las acciones del usuario que envie al controlador
require_once "controladores/controlador.php";
require_once "modelos/model.php";
$mvc = new mvcControlador();
$mvc -> plantilla();
?>
