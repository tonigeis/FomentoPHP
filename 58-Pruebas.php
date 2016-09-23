<?php
require('58-Futbolista.php');

$futbolista1 = new Futbolista(1, "Andres", "Iniesta", 29, 6, "Interior Derecho");
$futbolista2 = new Futbolista(2, "Lionel", "Messi", 28, 9, "Delantero centro");

$futbolistas = array($futbolista1, $futbolista2); 

foreach ($futbolistas as $key => $value) {
   	echo $value->getId()." - "."Soy ".$value->getNombre();
}  

/*for ($i=0; $i < count($futbolistas); $i++) { 
	echo $futbolistas[i]->getDorsal()."<br>"; 	
} */
?>