<?php

abstract class SeleccionFutbol {
	protected $id;
	protected $nombre;
	protected $apellidos;
	protected $edad;

	public function __construct($id, $nom, $ape, $ed){
		$this->id = $id;
      	$this->nombre = $nom;
      	$this->apellidos = $ape;
      	$this->edad = $ed;
	}

	public function getId(){
      return $this->id;
   }

   public function getNombre(){
      return $this->nombre;
   }

   public function getApellidos(){
      return $this->apellidos;
   }

   public function getEdad(){
      return $this->edad;
   }

	public function viajar() {
	     echo "Viajar (Clase Padre)";
	}

	public function concentrarse() {
	     echo "Concentrarse (Clase Padre)";
	}

	// IMPORTANTE -> METODO ABSTRACTO => no se implementa en la clase abstracta pero si en la clases hijas
	public abstract function entrenamiento();

	public function partidoFutbol() {
	     echo "Asiste al Partido de Fútbol (Clase Padre)";
	}
}

?>