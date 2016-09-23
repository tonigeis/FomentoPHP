<?php
require('58-SeleccionFutbol.php');

class Futbolista extends SeleccionFutbol {
   private $dorsal;
   private $demarcacion;

   public function __construct($id, $nom, $ape, $ed, $dor, $dem){
      parent::__construct($id, $nom, $ape, $ed);
      $this->dorsal = $dor;
      $this->demarcacion = $dem;
   }

   public function getDorsal(){
      return $this->dorsal;
   }

   public function getDemarcacion(){
      return $this->demarcacion;
   }

   public function entrenamiento() {
      echo "Realiza un entrenamiento (Clase Futbolista)<br>";
   }

   public function partidoFutbol() {
      echo "Juega un Partido (Clase Futbolista)<br>";
   }

   public function entrevista() {
      echo "Da una Entrevista<br>";
   }
}

?>