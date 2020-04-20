<?php 
include "funciones.php";
$metodos = new Metodos();
    
if (isset($_POST['n']) && isset($_POST['m'])) {
	$n = $_POST['n'];
	$m = $_POST['m'];
	$res = $metodos->calcularPregunta1($n, $m);
	if($res){
		echo "<img src='si.jpg'>";
	}else{
		echo "<img src='no.jpg'>";
	}
}else{
	echo "<a href='pregunta1.php'>Ingresar datos a la pregunta 1</a>";
}


?>