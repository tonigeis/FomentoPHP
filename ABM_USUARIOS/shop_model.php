<?php
require_once('db_abstract_model.php');

class Shop extends DBAbstractModel {
	protected $idShop;
	public $nombre;
	public $tipo;
	public $ubicacion;
	public $codigo;
	public $nif;
	public $alta;
	private $idUser;

	function __construct() {
		$this->db_name = 'book_example';
	}

	public function get($nif = '') {
		if(!empty($nif)){
			$this->query = "
			SELECT idShop, nombre, tipo, ubicacion, codigo, nif, alta, idUser
			FROM shops
			WHERE nif = '$nif'
			";
			$this->get_results_from_query();
		}
		else{
			echo "Debe informar del campo NIF";
		}
		
		if(count($this->rows) == 1){
			foreach ($this->rows[0] as $propiedad=>$valor){
				$this->$propiedad = $valor;
			}	
		}
	}

	public function set($shop_data=array()) {
		if(array_key_exists('nif', $shop_data)){
			$this->get($shop_data['nif']);
			if($shop_data['nif'] != $this->nif){
				foreach ($shop_data as $campo=>$valor){
					$$campo = $valor;
				}
				$this->query = "
				INSERT INTO shops
				(nombre, tipo, ubicacion, codigo, nif, alta, idUser)
				VALUES
				('$nombre', '$tipo', '$ubicacion', '$codigo', '$nif', '$alta', '$idUser')
				";
				$this->execute_single_query();
			}
			else{
				echo "Ya existe el registro con NIF ".$shop_data['nif'];
			}
		}
		else{
			echo "Debe informar del campo NIF";
		}
	}

	public function edit($shop_data=array()) {
		if(array_key_exists('nif', $shop_data)){
			$this->get($shop_data['nif']);
			if($shop_data['nif'] == $this->nif){
				foreach ($shop_data as $campo=>$valor){
					$$campo = $valor;
					if (empty($valor)) {
						$$campo = $this->$campo;
					}
				}

				$this->query = "
					UPDATE shops
					SET nombre = '$nombre',
						tipo = '$tipo',
						ubicacion = '$ubicacion',
						codigo = '$codigo',
						alta = '$alta',
						idUser = '$idUser'
					WHERE nif = '$nif'
				";
				$this->execute_single_query();
			}	
			else{
				echo "No existe la tienda con NIF " . $shop_data['nif'];
			}
		}
		else{
			echo "Has de informar el campo NIF";
		}
	}

	public function delete($nif='') {  
		if(!empty($nif)){
			$this->get($nif);
			if($nif == $this->nif){
				$this->query = "
					DELETE FROM shops
					WHERE nif = '$nif'
				";
				$this->execute_single_query();
			}	
			else{
				echo "No existe la tienda con el NIF ". $nif ." para eliminar";
			}
		}	
		else{
			echo "El NIF debe estar informado para eliminar una tienda";
		}
	}

	function __destruct() {
		unset($this);
	}
}
?>