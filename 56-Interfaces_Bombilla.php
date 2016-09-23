<?php
require_once ('56-Interfaces_Encendible.php');

class Bombilla implements Encendible{ 
   	public function encender(){ 
      	echo "<br>Y la luz se hizo..."; 
   	} 

   	public function apagar(){ 
      	echo "<br>Estamos a oscuras..."; 
   	} 
}

$bombilla = new Bombilla();
$bombilla->encender();
$bombilla->apagar();
?>