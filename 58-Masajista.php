<?php
require('58-SeleccionFutbol.php');

class Masajista extends SeleccionFutbol {

   private $titulacion;
   private $aniosExperiencia;
	
   public function entrenamiento() {
      echo "Da asistencia en el entrenamiento (Clase Masajista)";
   }

   public function darMasaje() {
      echo "Da un Masaje";
   }
}

?>