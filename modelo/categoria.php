<?php 
	require_once ("../config/conexion.php");

	/**
	 * 
	 */
	class Categoria
	{
		
		public function __construct(){
			/**VACIO**/
		}
		//IMPLEMENTAMOS UN METODO PARA INSERTAR REGISTRO
		public function insertar($nombre, $descripcion, $condicion){
			$sql = "INSERT INTO 
				tblcategoria (
				nombre, 
				descripcion, 
				condicion) VALUES(
				'$nombre',
				'$descripcion',
				'$condicion')";
			return ejecutarconsulta($sql);//llamamos a la funcion que ejecuta la cosulta

		}
		//implementacion de un metodo para editar registros
		public function editar($id_categoria,$nombre,$descripcion,$condicion)
		{
			$sql="UPDATE tblcategoria SET 
					nombre='$nombre',
					descripcion='$descripcion',
					condicion='$condicion'
					 WHERE idtblcategoria='$id_categoria'";//realiza consulta update
			return ejecutarconsulta($sql);			
		}
		//implementamos un metodo para desactivar categorias
		public function desactivar($id_categoria)
		{
			$sql="UPDATE tblcategoria SET 
				condicion='0' 
				WHERE idtblcategoria='$id_categoria'";//
			return ejecutarconsulta($sql);
		}
		//implementamos un metodo para activar categorias
		public function activar($id_categoria)
		{
			$sql="UPDATE tblcategoria SET 
				condicion='1' 
				WHERE idtblcategoria='$id_categoria'";//
			return ejecutarconsulta($sql);
		}
		public function mostrar($id_categoria)
		{
			$sql="SELECT * FROM tblcategoria WHERE idtblcategoria='$id_categoria'";
			return ejecutarunasolafila($sql);
		}
		//implementar un metodo para listar todos los regisstros
		public function listar()
		{
			$sql="SELECT * FROM tblcategoria";
			return ejecutarconsulta($sql);
		}
	}
 ?>