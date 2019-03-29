<?php 

	class persona 
	{
		// propiedades
		public $nombre; 
		public $estatura;

		//metodo
		public function mostrar() 
		{
			echo $this->nombre . ' mide: ' .$this->estatura . ' m <br>';
		}
	}
?>