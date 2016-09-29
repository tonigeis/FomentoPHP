<?php
require_once('models.php');

function set_identificadores($vista) {
	$identificadores = array();

	if($vista) {
		switch ($vista) {
			case 'vista_1':
				$identificadores = array('propiedad');
				break;
			case 'vista_2':
				$identificadores = array('propiedad_1', 'propiedad_2');
				break;
			case 'vista_3':
				$identificadores = array('propiedad_1', 'propiedad_2', 'suma');
				break;
		}
		return $identificadores;
	}
}

function armar_diccionario($vista, $data) {
	$diccionario = array();
	$identificadores = set_identificadores($vista);

	if($identificadores) {
		foreach ($identificadores as $identificador) {
			if(array_key_exists($identificador, $data)) {
				$diccionario[$identificador] = $data[$identificador];
			}
		}
	}
	return $diccionario;
}

function render_data($vista, $data) {
	$html = '';

	if(($vista)&&($data)) {
		$diccionario = armar_diccionario($vista, $data);
		if($diccionario) {
			$html = file_get_contents('html/'.$vista.'.html');
			foreach ($diccionario as $clave=>$valor) {
				$html = str_replace('{'.$clave.'}', $valor, $html);
			}
		}
	}
	print $html;
}

/*$modelo1 = new ModeloUno();
$modelo1->a(30);
settype($modelo1, 'array');

render_data('vista_1', $modelo1);*/

/*$modelo2 = new ModeloDos();
$modelo2->b(25, 40);
settype($modelo2, 'array');

render_data('vista_2', $modelo2);*/
?>