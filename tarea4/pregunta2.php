<!DOCTYPE html>
<html>
<head>
	<title>Tarea 4</title>
</head>
<body>
	<div style="text-align: center; margin-top: 5%">
		<div>
			<a href="pregunta1.php"> Preguntas 1 </a>&nbsp;&nbsp;&nbsp; 
			<a href="pregunta2.php"> Preguntas 2 </a>&nbsp;&nbsp;&nbsp;
		</div>
		<hr>
		<div>PREGUNTA 2</div>
		</br>
		<div>
			<form action="res2.php" method="post">
				<label>Ingresar Numero de Filas</label><br>
				<input type="number" name="filas"><br>
				<label>Ingresar Numero de Columnas</label><br>
				<input type="number" name="columnas"><br><br>
				<input type="submit" value="VERIFICAR">
			</form>
		</div>
		<div>
			<table>
				
			</table>
		</div>
	</div>
</body>
</html>
<style type="text/css">
	table {
	  border-collapse: collapse;
	}

	table, th, td {
	  border: 1px solid black;
	}
</style>ss