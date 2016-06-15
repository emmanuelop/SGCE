<?php
	$usuario=$_GET['usuario'];

	$conexion = new mysqli("localhost", "root", "", "sgce");
	if (!$conexion->connect_errno) {
		$consulta = "SELECT * FROM usuarios where usuario ='". $usuario ."'";
		$resultados = $conexion->query($consulta);
		if($resultados){
			$usuarios = $resultados->fetch_assoc();
			if($usuario != null){
				if($usuarios['usuario'] == $usuario){
					echo"Usuario Ya Existe";
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