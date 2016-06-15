<?php
	$correo=$_GET['correo_electronico'];

	$conexion = new mysqli("localhost", "root", "", "sgce");
	if (!$conexion->connect_errno) {
		$consulta = "SELECT * FROM usuarios where correo_electronico ='". $correo ."'";
		$resultados = $conexion->query($consulta);
		if($resultados){
			$usuarios = $resultados->fetch_assoc();
			if($correo != null){
				if($usuarios['correo_electronico'] == $correo){
					echo"Correo Electronico Ya Existe";
				}else
					echo"";	
			}else
				echo"";
		}
		else
			echo "Falló al consultar registros en la base de datos:" . $conexion->error;
	}
	else
	echo "Fallo al conectar a base de datos:" . $conexion->connect_error;
?>