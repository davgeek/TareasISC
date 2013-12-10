<?php
require('core/Config.php');
/*
* Clase envolutoria creada para setear la conexion
* en el atributo $_db
*/

class Model{

	//Atributo que sera accesible a todos los modelos
	//contrendra un objeto mysqli

	protected $_db;

	public function __construct(){
		//Se crea la conexion instanciando un objeto mysqli

		$this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($this->_db->connect_errno )
		{
			echo "Fallo al conectar a MySQL: ". $this->_db->connect_errno;
			return;
		}

		//Seteamos codificacion a UTF-8
		$this->_db->set_charset(DB_CHAR);
	}
}


?>