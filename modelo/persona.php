<?php 
	/**
	 * 
	 */
	class Persona
	{
		
		public function __construct()
		{
			# code...
		}

		//IMPLEMENTAMOS UN METODO PARA INSERTAR REGISTRO
		public function insertar($tipo_persona, $nombre, $tipo_documento, $num_documento, $direccion, $telefono, $email){
			$sql = "INSERT INTO 
				tblpersona (
				tipo_persona, 
				nombre, 
				tipo_documento,
				num_documento,
				direccion,
				telefono,
				email) VALUES(
				'$tipo_persona',
				'$nombre',
				'$tipo_documento',
				'$num_documento',
				'$direccion',
				'$telefono',
				'$email')";
			return ejecutarconsulta($sql);//llamamos a la funcion que ejecuta la cosulta

		}
		//implementacion de un metodo para editar registros
		public function editar($idtblpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento, $direccion, $telefono, $email)
		{
			$sql="UPDATE tblpersona SET 
					tipo_persona='$tipo_persona',
					nombre='$nombre',
					tipo_documento='$tipo_documento',
					num_documento='$num_documento',
					direccion='$direccion',
					telefono='$telefono',
					email='$email'

					 WHERE idtblpersona='$idtblpersona'";//realiza consulta update
			return ejecutarconsulta($sql);	
		}
		public function mostrar($idtblpersona)
		{
			$sql="SELECT * FROM tblpersona WHERE idtblpersona='$idtblpersona'";
			return ejecutarconsultasimplefila($sql);
		}
		//implementar un metodo para listar todos los regisstros
		public function listar()
		{
			$sql="SELECT * FROM tblpersona";
			return ejecutarconsulta($sql);
		}
	}
 ?>