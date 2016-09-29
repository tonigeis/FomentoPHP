<?php
class ModeloUno {
	var $propiedad;

	function a($parametro) {
		$this->propiedad = $parametro;
	}
}

class ModeloDos {
	var $propiedad_1;
	var $propiedad_2;

	function b($param1, $param2) {
		$this->propiedad_1 = $param1;
		$this->propiedad_2 = $param2;
	}
}

class ModeloTres {
	var $propiedad_1;
	var $propiedad_2;
	var $suma;

	function c($param1, $param2) {
		$this->propiedad_1 = $param1;
		$this->propiedad_2 = $param2;
	}

	function getSuma() {
		$this->suma = $this->propiedad_1 + $this->propiedad_2;
	}
}

?>