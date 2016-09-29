<?php
require_once('models.php');
require_once('view.php');

enviar_data();

function enviar_data() {
	$vista = capturar_evento();

	if($vista) {
		$modelo = identificar_modelo($vista);
		if($modelo) {
			$data = invocar_modelo($modelo);
			if($data) {
				render_data($vista, $data);
			}
		}
	}
}

function capturar_evento() {
	$vista = '';

	if($_GET) {
		if(array_key_exists('vista', $_GET)) {
			$vista = $_GET['vista'];
		}
	}
	return $vista;
}

function identificar_modelo($vista) {
	if($vista) {
		switch ($vista) {
			case 'vista_1':
				$modelo = 'ModeloUno';
				break;
			case 'vista_2':
				$modelo = 'ModeloDos';
				break;
			case 'vista_3':
				$modelo = 'ModeloTres';
				break;
			default:
				exit();
		}
	}
	return $modelo;
}

function invocar_modelo($modelo) {
	if($modelo) {
		$data = new $modelo();
		if ($modelo == 'ModeloUno') {
			$data->a($_GET['propiedad']);
		}
		else if($modelo == 'ModeloDos'){
			$data->b($_GET['propiedad_1'], $_GET['propiedad_2']);
		}
		else {
			$data->c($_GET['propiedad_1'], $_GET['propiedad_2']);
			$data->getSuma();
		}
		settype($data, 'array');
		return $data;
	}
}

?>