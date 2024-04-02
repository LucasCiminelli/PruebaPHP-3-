<?php

include("conexion.php");

if($_POST["action"]=="updateContact"){
    if($_POST["id"]){
        $id = $_POST["id"];


        $query = "SELECT * FROM ag_contacto WHERE id_contacto = $id";


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

    }
}



?>