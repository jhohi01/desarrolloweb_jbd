<!DOCTYPE html>
<html>
<head>
	<title>Inputs</title>
</head>
<body style="text-align: center;">
	<form action="resultado.php" method="post">
			<?php  

			if (isset($_POST['numero'])) {
				$numero = $_POST['numero'];

				$datos = "<tr>";

				for($i = 0; $i < $numero; $i++){
					$datos = $datos . "<td><input type='number' name='minuendo[]'></td>";
				}

				$datos = $datos . "</tr><tr>";

				for($i = 0; $i < $numero; $i++){
					$datos = $datos . "<td><input type='number' name='substraendo[]'></td>";
				}
				$datos = $datos . "</tr>";

				echo "<table>".$datos."</table>";
			}else{
				echo "<label style='color:red'>¡Debe Ingresar el número!</label> <a href='tarea6.html'>Ingresar</a>";
			}
		?><br>
		<input type="submit" value="RESTAR">
		</form>

</body>
</html>

<style type="text/css">
	table {
	  border-collapse: collapse;
	}

	table, th, td {
	  border: 1px solid black;
	}
</style>

