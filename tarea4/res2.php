<?php 

include "funciones.php";
$metodos = new Metodos();
$res = '';
    
if (isset($_POST['filas']) && isset($_POST['columnas'])) {
	$filas = (int)$_POST['filas'];
	$columnas = (int)$_POST['columnas'];

	$res = $metodos->calcularPregunta2($filas, $columnas);

	echo "<table>" . $res . "</table>";

}else{
	echo "<a href='pregunta2.php'>Ingresar datos a la pregunta 2</a>";
}

?>
<style type="text/css">
	table {
	  border-collapse: collapse;
	}

	table, th, td {
	  border: 1px solid black;
	}
</style>
