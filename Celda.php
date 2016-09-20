<?php
class Celda{
	private $texto;
	private $colorFuente;
	private $colorFondo;

	public function __construct($txt, $coFu, $coFo){
		$this->texto = $txt;
		$this->colorFuente = $coFu;
		$this->colorFondo = $coFo;
	}

	public function graficar(){
		echo '<td style="color:'.$this->colorFuente.'; background-color:'.$this->colorFondo.';">'.$this->texto.'</td>';
	}
}
?>