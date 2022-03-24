<?php 
require('conexion/Conexion.php');
	$data=new Conexion();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM imprimir";
	$result = $con->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	
	var_dump($data);
 ?>