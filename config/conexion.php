<?php 
	require_once 'global.php';

	$conexion = new mysqli(BD_HOST,BD_USER_NAME,BD_PASS,BD_NAME);

	//Si tenemos un posible error en la conexion en la bd

	if (mysqli_connect_error()) {
		printf("falló la conexion: %s\n", mysqli_connect_error());
		exit();

	}else{
		//printf("conexión exitosa");
	}

	if (!function_exists('ejecutarConsulta')) {
		function ejecutarconsulta($sql){
			global $conexion;
			$query = $conexion->query($sql);
		}
		function ejecutarunasolafila($sql){
			global $conexion;
			$query = $conexion->query($sql);
			$row = $query->fecth_assoc();
			return $row;
		}
		function colsultarretornarid($sql){
			global $conexion;
			$query = $conexion->query($sql);
			return $conexion->insert_id;
		}
		function limpiarcadena($sql){
			global $conexion;

			$str = mysqli_real_escape_string($conexion,trim($str));
			return htmlspecialchars($str);
		}
	}
?>