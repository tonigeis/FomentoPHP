<?php
require_once ('56-Interfaces_Encendible.php');

abstract class Bombilla implements Encendible{ 
   	/*public function encender(){ 
      	echo "<br>Y la luz se hizo..."; 
   	} 

   	public function apagar(){ 
      	echo "<br>Estamos a oscuras..."; 
   	} */
}

/*$bombilla = new Bombilla();
$bombilla->encender();
$bombilla->apagar();*/
echo "La clase Bombilla esta declarada adecuadamente porque, aunque implementa una interficie, es abstracta y no se ve obligada a implementar los metodos de la interficie";
?>