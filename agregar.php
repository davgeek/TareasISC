<?php
	require_once('models/tareasModel.php');

	$tareasM = new tareasModel();


	echo $_POST['materia'],$_POST['tarea'],$_POST['fecha'];

	if( count($_POST) AND trim($_POST['tarea']) != ''){
		$tareasM->add_tarea($_POST['materia'],$_POST['tarea'],$_POST['fecha']);
	} 

?>