<?php 

$minuendo = $_POST['minuendo'];
$substraendo = $_POST['substraendo'];

$datos = "<tr>";
foreach($minuendo as $posicion=>$value) {
    $datos = $datos . "<td>" . ($value - $substraendo[$posicion]) . "</td>";
}
$datos = $datos . "</td>";

echo "<table>".$datos."</table>";


?>

<style type="text/css">
	table {
	  border-collapse: collapse;
	}

	table, th, td {
	  border: 1px solid black;
	}
</style>