<?php
require_once('db_abstract_model.php');
class Usuario extends DBAbstractModel {
	public $nombre;
	public $apellido;
	public $email;
	private $clave;
	protected $id;
	function __construct() {
		$this->db_name = 'book_example';
	}
	public function get($user_email='') {
		if($user_email != ''):
			$this->query = "
			SELECT id, nombre, apellido, email, clave
			FROM usuarios
			WHERE email = '$user_email'
			";
			$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1):
			foreach ($this->rows[0] as $propiedad=>$valor):
				$this->$propiedad = $valor;
			endforeach;
		endif;
	}
	public function set($user_data=array()) {
		if(array_key_exists('email', $user_data)):
			$this->get($user_data['email']);
			if($user_data['email'] != $this->email):
				foreach ($user_data as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
				INSERT INTO usuarios
				(nombre, apellido, email, clave)
				VALUES
				('$nombre', '$apellido', '$email', '$clave')
				";
				$this->execute_single_query();
			endif;
		endif;
	}
	public function edit($user_data=array()) {
		if(array_key_exists('email', $user_data)):
			$this->get($user_data['email']);
			if($user_data['email'] == $this->email):
				foreach ($user_data as $campo=>$valor):
					$$campo = $valor;
				endforeach;

				$this->query = "
					UPDATE usuarios
					SET nombre='$nombre',
					apellido='$apellido',
					clave='$clave'
					WHERE email = '$email'
				";
				$this->execute_single_query();
			else:
				echo "No existe este usuario para actualizar";
			endif;
		else:
			echo "Has de informar el campo Email";
		endif;
	}
	public function delete($user_email='') {
		if(!empty($user_email)):
			echo $this->email;
			$this->get($user_email);
			echo $this->email;
			if($user_email == $this->email):
				$this->query = "
					DELETE FROM usuarios
					WHERE email = '$user_email'
				";
				$this->execute_single_query();
			else:
				echo "No existe el usuario con este email para eliminar";
			endif;
		else:
			echo "El email debe estar informado";
		endif;
	}
	function __destruct() {
		unset($this);
	}
}
?>