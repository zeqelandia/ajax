<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
	
	$conexion = mysqli_connect('localhost', 'root', '', 'aerolineas');
	
	if (!$conexion) {
		die("No se pudo conectar a la base de datos: ". mysqli_error($conexion));
	}

	$queryModeloAvion = "SELECT nombre, fabricante FROM modelos WHERE nombreReducido= \"".$_GET['modeloAvion']."\" ";

	$resultadoModeloAvion= $conexion->query($queryModeloAvion);
	
	if($resultadoModeloAvion->num_rows != 0){
		while ($row = mysqli_fetch_array($resultadoModeloAvion)){
			echo "<p>".$row['nombre']."<br></p>";
			echo "<p>".$row['fabricante']."<br></p>";
	    }
	}else{
		echo "no";
	}

	mysqli_close($conexion);
?>
</body>
</html>