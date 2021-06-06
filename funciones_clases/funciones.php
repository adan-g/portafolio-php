<?php  

function conexionDB($sql){
	$servidor="localhost";
	$usuario="adangime_admin";
	$password="portafolioag";
	$bd="adangime_portafolio";

	$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
	mysqli_query($conexion,"SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

	$query=mysqli_query($conexion,$sql);

	mysqli_close($conexion);
	return $query;
}

?>