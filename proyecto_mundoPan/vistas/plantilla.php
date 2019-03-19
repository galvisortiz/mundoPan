<!DOCTYPE html>
<html>
<head>
	<title>Plantillas</title>

<style>
	header{
		position: relative;
		margin: auto;
		text-align: center;
		padding: 5px;
	}
	header h1{
		color: blue;
		text-decoration: none;
	}
     nav{
     	position: relative;
     	margin: auto;
     	width: 100%;
     	height: auto;
     	background: black;
       }
       nav ul{
       	position: relative;
       	margin: auto;
       	width: 50%;
       	text-align: center;
       }
       nav ul li{
       	display: inline-block;
       	width: 24%;
       	line-height: 50px;
       	list-style: none;
       }
       nav ul li a{
       	color: white;
       	text-decoration: none;
       }
       section{
       	position: relative;
       	padding: 20px;
       }
</style>


</head>
<body>
<header>
	<h1>Panaderia MundoPan del Libano</h1>
</header>
<?php
include "modulos/navegacion.php";

?>
<section>
<?php

$mvc = new mvcControlador();
$mvc -> enlacesPaginasController();

?> 
</section>


</body>
</html>