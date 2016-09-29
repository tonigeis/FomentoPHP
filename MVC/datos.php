<?php
require_once('../ABM_USUARIOS/usuarios_model.php');

$email = $_GET['email'];
$usuario = new Usuario();
$usuario->get($email);

$template = file_get_contents('plantilla.tpl');
$diccionario = $usuario->getRows()[0];
foreach ($diccionario as $clave=>$valor) {
	$template = str_replace('{'.$clave.'}', $valor, $template);
}

print $template;

?>