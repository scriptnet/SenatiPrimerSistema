<?php
 require 'class_persona.php';

 $persona1 = new persona;
		 $persona1->nombre = 'Juan';
		 $persona1->estatura = 1.65;
		 $persona1->mostrar();
		 
 $persona2 = new persona;
		 $persona2->nombre = 'Martha';
		 $persona2->estatura = 1.55;
		 $persona2->mostrar();
 ?>