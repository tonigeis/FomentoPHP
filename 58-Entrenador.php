<?php
require('58-SeleccionFutbol.php');

class Entrenador extends SeleccionFutbol {
   private $idFederacion;
	
   public function entrenamiento() {
      echo "Dirige un entrenamiento (Clase Entrenador)";
   }

   public function partidoFutbol() {
      echo "Dirige un Partido (Clase Entrenador)";
   }

   public function planificarEntrenamiento() {
      echo "Planificar un Entrenamiento";
   }
}
?>