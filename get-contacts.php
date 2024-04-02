<?php

include("conexion.php");


$query = "SELECT * from ag_contacto";

$result = mysqli_query($conection, $query);

$json = array();

while($row = mysqli_fetch_assoc($result)){
	$json[] = array(
		"id" => $row["id_contacto"],
		"nombre" => $row["nombres"],
		"apellido" => $row["apellidos"],
		"telefono" => $row["telefono"],
		"email" => $row["email"],
	);
}

$jsonToString = json_encode($json);

echo $jsonToString;

?>