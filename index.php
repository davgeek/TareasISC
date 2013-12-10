<?php
	require_once('models/tareasModel.php');

	$tareasM = new tareasModel();

	$tareas = $tareasM->get_tarea();


	if(count($tareas) == 0){
		echo "No hay tareas.";
	}else{
		echo "Mostrando tareas: ";
		foreach ($tareas as $tarea) {
			echo "<br>";
			echo nl2br( htmlspecialchars(json_encode($tarea['materia'])));
			echo nl2br( htmlspecialchars($tarea['tarea']));
			echo nl2br( htmlspecialchars($tarea['fecha_entrega']));
		}
	}

?>