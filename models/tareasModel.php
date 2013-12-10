<?php
require_once('core/Model.php');

class tareasModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	//Metodo que inserta en la base de datos
	public function add_tarea($pMateria,$pTarea,$pFecha){

		$stmt = $this->_db->prepare('INSERT INTO tareas_isc(materia, tarea, fecha_entrega) VALUES (?, ?, ?)');
		$stmt->bind_param('sss', $pMateria ,$pTarea, $pFecha );

		$stmt->execute();
	}

	//Metodo que recure las ultimas 10 entradas
	public function get_tarea(){
		$result = $this->_db->query('SELECT id, materia, tarea, fecha_entrega FROM tareas_isc ORDER BY id DESC LIMIT 10');
		$data = array();

		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}
}

pu
?>