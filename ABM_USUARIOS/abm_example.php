<?php
	require_once('usuarios_model.php');
	require_once('shop_model.php');
	//USER MODEL
	# Traer los datos de un usuario
	/*$usuario1 = new Usuario();
	$usuario1->get('user@email.com');
	print $usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';

	# Crear un nuevo usuario
	$new_user_data = array(
		'nombre'=>'Juan',
		'apellido'=>'Perez',
		'email'=>'marconi@mail.com',
		'clave'=>'jacaranda'
	);
	$usuario2 = new Usuario();
	$usuario2->set($new_user_data);
	$usuario2->get($new_user_data['email']);
	print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';

	# Editar los datos de un usuario existente
	$edit_user_data = array(
		'nombre'=>'Albert',
		'apellido'=>'Jacinto',
		'email'=>'albert2001@mail.com',
		'clave'=>'1234'
	);
	$usuario3 = new Usuario();
	$usuario3->edit($edit_user_data);
	$usuario3->get($edit_user_data['email']);
	print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';

	# Eliminar un usuario
	$usuario4 = new Usuario();
	$usuario4->get('marconi@mail.com');
	$usuario4->delete('marconi@mail.com');
	print $usuario4->nombre . ' ' . $usuario4->apellido . ' ha sido eliminado';*/

	//SHOP MODEL
	# Traer los datos de una tienda
	$shop1 = new Shop();
	$shop1->get('99887654Y');
	print $shop1->nombre . ' ' . $shop1->tipo . ' ' . $shop1->ubicacion .' existe<br>';

	# Crear una nueva tienda
	/*$new_shop_data = array(
		'nombre' => 'Primark',
		'tipo' => 'Varis',
		'ubicacion' => 'Calle Falsa, 123',
		'alta' => '0000-00-00 00:00:00',
		'codigo' => '08023',
		'nif' => '99887654D',
		'idUser' => '3'
	);
	$shop2 = new Shop();
	$shop2->set($new_shop_data);
	$shop2->get($new_shop_data['nif']);
	print $shop2->nombre . ' ' . $shop2->tipo . ' ' . $shop2->nif .' ha sido creado<br>';*/

	# Editar los datos de una tienda existente
	/*$edit_shop_data = array(
		'nombre' => 'Prim',
		'tipo' => '',
		'ubicacion' => 'Calle Falsa, 123',
		'alta' => '0000-00-00 00:00:00',
		'codigo' => '08024',
		'nif' => '99887654D',
		'idUser' => '3'
	);
	$shop3 = new Shop();
	$shop3->edit($edit_shop_data);
	$shop3->get($edit_shop_data['nif']);
	print $shop3->nombre . ' ' . $shop3->tipo . ' ' . $shop3->nif .' ha sido editado<br>';*/

	# Eliminar una tienda
	$shop4 = new Shop();
	$shop4->delete('19887654R');
	print $shop4->nombre . ' ' . $shop4->tipo . ' ha sido eliminada';
?>